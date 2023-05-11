<?php

// A class is the specification/description/blueprint of objects.
// It's a kind of data type.

namespace NS\Database;

class Pig
{
    const OWNER = 'iO Academy';

    // Properties
    private int $id;
    private string $name;
    private float $weight;
    private string $colour;
    private string $species;
    private string $scientificName = 'Sus';

    public function __construct(
        string $name, float $weight, string $colour, string $species, int $id = -1
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->weight = $weight;
        $this->colour = $colour;
        $this->species = $species;
    }

    // Methods

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */
    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }

    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /**
     * @param string $species
     */
    public function setSpecies(string $species): void
    {
        $this->species = $species;
    }

    /**
     * @return string
     */
    public function getScientificName(): string
    {
        return $this->scientificName;
    }

    public function speak(): string
    {
        return 'Oink!';
    }

    public function wagTail(): string
    {
        return 'Wag, wag!';
    }

    public function eat(string $food): string
    {
        return 'Mmmm. I love tasty ' . $food;
    }
}
