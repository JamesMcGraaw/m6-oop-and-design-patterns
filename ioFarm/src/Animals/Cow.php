<?php

namespace src\Animals;
class Cow
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function eat(string $food): string
    {
        return 'Mmm ' . $food;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
