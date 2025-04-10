<?php

declare(strict_types=1);

class ConfigurableFieldInjectionContainer
{
    private array $instances = [];
    private array $config;
    private array $interfaceBindings;

    public function __construct(array $classList, array $config = [], array $interfaceBindings = [])
    {
        $this->config = $config;
        $this->interfaceBindings = $interfaceBindings;

        foreach ($classList as $className) {
            $reflection = new ReflectionClass($className);
            if ($reflection->getAttributes(Component::class)) {
                $instance = $reflection->newInstance();
                $this->instances[$className] = $instance;
            }
        }
        foreach ($this->instances as $instance) {
            $this->injectFields($instance);
        }
    }

    private function injectFields(object $instance): void
    {
        $reflectionObject = new ReflectionObject($instance);
        foreach ($reflectionObject->getProperties() as $property) {
            # Handle  #[InjectField]
            $type = $property->getType()?->getName();
            if ($property->getAttributes(InjectField::class)) {
                $implementationClass = $this->resolveImplementation($type);
                if ($implementationClass && array_key_exists($implementationClass, $this->instances)) {
                    $property->setAccessible(true);
                    $property->setValue($instance, $this->instances[$implementationClass]);
                }
            }

            # Handle #[Value]
            $this->injectConfigeValue($property, $instance);
        }
    }

    /**
     * @param ReflectionProperty $property
     * @return void
     * @throws Exception
     */
    private function injectConfigeValue(ReflectionProperty $property, object $instance): void
    {
        foreach ($property->getAttributes(Value::class) as $attr) {
            $attrValue = $attr->newInstance();
            $key = $attrValue->key;
            if (array_key_exists($key, $this->config)) {
                $property->setAccessible(true);
                $property->setValue($instance, $this->config[$key]);
            } else {
                throw new Exception("Missing config value for key: $key");
            }
        }
    }

    /**
     * @throws Exception
     */
    private function resolveImplementation(string $type): string
    {
        if (interface_exists($type)) {
            return $this->interfaceBindings[$type] ??
                throw new Exception("No implementation found for interface: $type");
        }
        return $type;
    }

    /**
     * @throws Exception
     */
    public function get(string $class)
    {
        return $this->instances[$class] ?? throw new Exception("No class found for $class");
    }

}