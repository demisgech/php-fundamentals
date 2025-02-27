<?php

// The optional operator
// $result = $object?->property?->method()?->element;
// Defining a class with a property
class User
{
    public ?string $name = null;
}

// Creating an instance of the class
$user = new User();

// Using optional chaining to access the property
echo $user?->name ?? 'default name'; // Output: default name

// Assigning a value to the property
$user->name = "Alice";

echo $user?->name ?? "Default";// Alice
