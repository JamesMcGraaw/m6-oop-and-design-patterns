<?php

namespace FarmApp\Animals;
class Cow
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function eat(Grass $food): string
    {
        return 'Mmm ' . $food->getFoodType();
    }

    public function getName(): string
    {
        return $this->name;
    }
}
