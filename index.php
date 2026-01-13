<?php
require_once "Student.php";

// INSERT
$s1 = new Student("Tomáš", 17, 3);
$s1->save();
echo "Uložen student ID: {$s1->id}<br>";

// SELECT (find)
$loaded = Student::find($s1->id);
if ($loaded) {
    echo "Načten: {$loaded->name}, {$loaded->age}, ročník {$loaded->year} (id {$loaded->id})<br>";
}

// UPDATE (přes save s id)
if ($loaded) {
    $loaded->year = 4;
    $loaded->save();
    echo "Aktualizováno na ročník 4 (id {$loaded->id})<br>";
}

// SELECT (all)
echo "<hr><b>Všichni studenti:</b><br>";
foreach (Student::all() as $s) {
    echo "{$s->id}: {$s->name} ({$s->age}) - ročník {$s->year}<br>";
}

// DELETE (volitelné testování)
// $s1->delete();
// echo "<br>Smazáno.";
