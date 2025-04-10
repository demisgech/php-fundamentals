<?php

declare(strict_types=1);

class ConstructorInjectionContainer
{
    private array $instances = [];
    private array $interfaceBindings;

    /**
     * @throws Exception
     */
    public function __construct(array $classList, array $binding = [])
    {
        $this->interfaceBindings = $binding;
        foreach ($classList as $className) {
            $reflection = new ReflectionClass($className);

            // ✅ Only handle classes with #[Component]
            if (!$reflection->getAttributes(Component::class)) {
                continue;
            }

            $constructor = $reflection->getConstructor();

            if ($constructor && $constructor->getAttributes(InjectConstructor::class)) {
                $params = [];

                foreach ($constructor->getParameters() as $parameter) {
                    $parameterType = $parameter->getType()?->getName();

                    if (isset($this->interfaceBindings[$parameterType])) {
                        $parameterType = $this->interfaceBindings[$parameterType];
                    }

                    if (!isset($this->instances[$parameterType])) {
                        $this->instances[$parameterType] = new $parameterType();
                    }

                    $params[] = $this->instances[$parameterType];
                }

                $this->instances[$className] = $reflection->newInstanceArgs($params);
            } else {
                $this->instances[$className] = $reflection->newInstance();
            }
        }
    }

    /**
     * @throws Exception
     */
    public function get(string $class): object
    {
        return $this->instances[$class] ?? throw new Exception("No class instance for $class");
    }
}
