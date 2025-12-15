<?php

require_once "Student.php";
require_once "Classroom.php";


$classroom = new Classroom("3.A", 2);


$student1 = new Student("Tomáš", 17, 3);
$student2 = new Student("Lucie", 16, 3);
$student3 = new Student("Martin", 17, 3);


$classroom->enroll($student1);
$classroom->enroll($student2);
$classroom->enroll($student3); 

echo "<hr>";


$student1->introduce();
$student2->introduce();
