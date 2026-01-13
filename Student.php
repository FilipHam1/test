<?php
require_once "Database.php";

class Student
{
    public ?int $id;
    public string $name;
    public int $age;
    public int $year;

    public function __construct(string $name, int $age, int $year, ?int $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->year = $year;
    }

    
    public function save(): void
    {
        $pdo = Database::pdo();

        if ($this->id === null) {
            $stmt = $pdo->prepare("INSERT INTO students (name, age, year) VALUES (:name, :age, :year)");
            $stmt->execute([
                ":name" => $this->name,
                ":age"  => $this->age,
                ":year" => $this->year,
            ]);
            $this->id = (int)$pdo->lastInsertId();
        } else {
            $stmt = $pdo->prepare("UPDATE students SET name=:name, age=:age, year=:year WHERE id=:id");
            $stmt->execute([
                ":id"   => $this->id,
                ":name" => $this->name,
                ":age"  => $this->age,
                ":year" => $this->year,
            ]);
        }
    }

    
    public static function find(int $id): ?Student
    {
        $pdo = Database::pdo();
        $stmt = $pdo->prepare("SELECT * FROM students WHERE id = :id");
        $stmt->execute([":id" => $id]);
        $row = $stmt->fetch();

        if (!$row) return null;

        return new Student($row["name"], (int)$row["age"], (int)$row["year"], (int)$row["id"]);
    }

   
    public static function all(): array
    {
        $pdo = Database::pdo();
        $rows = $pdo->query("SELECT * FROM students ORDER BY id DESC")->fetchAll();

        $out = [];
        foreach ($rows as $row) {
            $out[] = new Student($row["name"], (int)$row["age"], (int)$row["year"], (int)$row["id"]);
        }
        return $out;
    }

   
    public function delete(): void
    {
        if ($this->id === null) return;

        $pdo = Database::pdo();
        $stmt = $pdo->prepare("DELETE FROM students WHERE id = :id");
        $stmt->execute([":id" => $this->id]);

        $this->id = null;
    }
}
