<?php
require_once "Person.php";

class Student extends Person
{
    public int $year;

    public function __construct(string $name, int $age, int $year)
    {
        parent::__construct($name, $age); 
        $this->year = $year;
    }

    public function introduce(): void
    {
        parent::introduce();
        echo "Chodím do {$this->year}. ročníku.<br>";
    }
}
