<?php
require_once "Student.php";

class Classroom
{
    public string $label;
    public int $capacity;
    public array $students;

    public function __construct(string $label, int $capacity)
    {
        $this->label = $label;
        $this->capacity = $capacity;
        $this->students = [];
    }

    public function enroll(Student $student): void
    {
        if (count($this->students) < $this->capacity) {
            $this->students[] = $student;
            echo $student->getName() . " byl zapsán do třídy {$this->label}.<br>";
        } else {
            echo "Třída {$this->label} je plná.<br>";
        }
    }
}
