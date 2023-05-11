<?php

namespace FarmApp\Animals;

class Horse
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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
