<?PHP

class Foo
{
    // doSomething...
}

$objectType = new Foo();
echo gettype($objectType); // object
echo "\n";

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spads;
}

$enumType = Suit::Diamonds;
echo gettype($enumType); // Object
echo "\n";

function callableFunction(): callable
{
    return fn ($variable_name) => $variable_name;
}

echo gettype(callableFunction()); // object
echo "\n";

