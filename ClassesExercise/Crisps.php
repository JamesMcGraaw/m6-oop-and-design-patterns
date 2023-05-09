<?php

class Crisps
{
    public const FLAVOURPROFILE = 'savory';

    private string $flavour;

    private string $manufactor;

    private float $weight;

    public function __construct(string $flavour, string $manufactor, float $weight) {
        $this->flavour = $flavour;
        $this->manufactor = $manufactor;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getFlavour(): string
    {
        return $this->flavour;
    }

    /**
     * @return string
     */
    public function getManufactor(): string
    {
        return $this->manufactor;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

}