<<<<<<< HEAD
<?php

class Person
{
    protected string $name;
    protected int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInfo(): string
    {
        return "{$this->name}, {$this->age} let";
    }
}
=======
<?php
public function getName(): string
{
    return $this->name;
}

class Person
{
    protected string $name;
    protected int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInfo(): string
    {
        return "{$this->name}, {$this->age} let";
    }
}

>>>>>>> 970eb635745120dcc057aedab335c4a7084facad
