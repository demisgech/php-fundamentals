<?php

class Person
{
    public function __construct(private string $firstName, private string $lastName)
    {

    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getFullName(): string
    {
        return $this->firstName . " " . $this->lastName;
    }

}

class Student extends Person
{
    public function __construct(
        private string $title,
        string         $firstName,
        string         $lastName)
    {
        parent::__construct($firstName, $lastName);
    }

    public function getFullName(): string
    {
        return $this->title . " " . parent::getFullName();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

}

$person = new Person("Demis", "Getachew");
$fullName = $person->getFullName();
echo "Full Name: " . $fullName;

$student = new Student("Student", "Demis", "Getachew");
$fullName = $student->getFullName();

echo "\nFull Name: " . $fullName;