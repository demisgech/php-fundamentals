<?php

declare(strict_types=1);

class MethodInjectionContainer
{
    private array $instances = [];
    private array $interfaceBindings;
    private array $constructorParams;

    public function __construct(array $classList,
                                array $interfaceBindings = [],
                                array $constructorParams = [])
    {
        $this->interfaceBindings = $interfaceBindings;
        $this->constructorParams = $constructorParams;

        foreach ($classList as $className) {
            $reflection = new ReflectionClass($className);
            if (!$reflection->getAttributes(Component::class)) {
                continue;
            }
            $params = $this->constructorParams[$className] ?? [];
            $instance = new $className(...$params);
//            $instance = $reflection->newInstance();
            $this->instances[$className] = $instance;
        }

        foreach ($this->instances as $instance)
            $this->injectMethods($instance);
    }

    private function injectMethods(object $instance)
    {
        $reflectionObject = new ReflectionObject($instance);
        foreach ($reflectionObject->getMethods() as $method) {
            if ($method->getAttributes(InjectMethod::class)) {

                $args = [];
                foreach ($method->getParameters() as $parameter) {
                    $type = $parameter->getType()?->getName();
                    $concretClass = $this->resolveImplementation($type);
                    // Instantiate the concrete class if it's not already instantiated
                    if (!array_key_exists($concretClass, $this->instances)) {
                        $params = $this->constructorParams[$concretClass] ?? [];
                        $this->instances[$concretClass] = new $concretClass(...$params);
                    }

                    // Add the resolved instance to the arguments
                    $args[] = $this->instances[$concretClass];
                }

                // Invoke the method with the resolved arguments
                $method->invokeArgs($instance, $args);
            }
        }
    }

    /**
     * Resolves the concrete implementation for an interface.
     *
     * @param string $type The type (interface) to resolve.
     * @return string The name of the concrete class that implements the interface.
     * @throws Exception If no implementation is found for the interface.
     */
    private function resolveImplementation(string $type): string
    {
        // If it's an interface, find the implementation class from the bindings
        if (interface_exists($type)) {
            return $this->interfaceBindings[$type] ??
                throw new Exception("No implementation found for interface: $type");
        }
        // Otherwise, return the class itself
        return $type;
    }

    /**
     * Get an instance of a class by its name.
     *
     * @throws Exception If no instance is found for the requested class.
     */
    public function get(string $class): object
    {
        return $this->instances[$class] ?? throw new Exception("No instance for $class");
    }
}