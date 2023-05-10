<?php
// This does

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

class CowAdapter extends Cow
{
    public function eat(): string
    {
        return $this->feed();
    }
}

function feedAnimal($animal)
{
    echo $animal->eat();
}

$pig = new Pig();
feedAnimal($pig);

$cow = new CowAdapter();
feedAnimal($cow);

