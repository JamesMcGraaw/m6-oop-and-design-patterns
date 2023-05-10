<?php
// This doesn't work

class Pig
{
    private string $food = 'truffles';

    public function eat(): string
    {
        return 'Mmm ' . $this->food . '!';
    }
}

class Cow
{
    private string $food = 'grass';

    public function feed(): string
    {
        return 'Mmm ' . $this->food . '!';
    }
}

function feedAnimal($animal)
{
    echo $animal->eat();
}

$pig = new Pig();
feedAnimal($pig);

$cow = new Cow();
feedAnimal($cow);

