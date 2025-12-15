<?php

class Classroom
{
    public string $label;
    public int $capacity;
    public array $students;

    // konstruktor
    public function __construct(string $label, int $capacity)
    {
        $this->label = $label;
        $this->capacity = $capacity;
        $this->students = []; // výchozí hodnota
    }

    // metoda navíc – naplnění pole objektů
    public function enroll(Student $student): void
    {
        if (count($this->students) < $this->capacity) {
            $this->students[] = $student;
            echo "{$student->name} byl zapsán do třídy {$this->label}.<br>";
        } else {
            echo "Třída {$this->label} je plná.<br>";
        }
    }
}
