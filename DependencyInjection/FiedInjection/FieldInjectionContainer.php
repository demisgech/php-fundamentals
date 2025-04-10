<?php

declare(strict_types=1);

require_once "InjectField.php";

class  FieldInjectionContainer
{
    private array $instances = [];

    public function __construct(array $classList)
    {

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

    private function injectFields(object $instance)
    {
        $reflectionObject = new ReflectionObject($instance);
        foreach ($reflectionObject->getProperties() as $property) {
            if ($property->getAttributes(InjectField::class)) {
                $type = $property->getType()?->getName();
                if ($type && !array_key_exists($type, $this->instances)) {
                    $this->instances[$type] = new $type();
                    $property->setAccessible(true);
                    $property->setValue($instance, $this->instances[$type]);
                }
            }
        }
    }

    /**
     * @throws Exception
     */
    public function get($class)
    {
        return $this->instances[$class] ?? throw new Exception("No class found for $class");
    }
}