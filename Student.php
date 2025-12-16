<?php

class Student
{
    public string $name;
    public int $age;
    public int $year;

    public function __construct(string $name, int $age, int $year)
    {
        $this->name = $name;
        $this->age = $age;
        $this->year = $year;
    }

    public function introduce(): void
    {
        echo "Jmenuji se {$this->name} a je mi {$this->age} let.<br>";
    }
}
