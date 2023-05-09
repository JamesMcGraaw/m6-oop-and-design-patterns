<?php

abstract class Vehicle
{
    private float $weight;

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
        if ($weight < 0) {
            throw new Exception('Weight cannot be negative');
        }
        $this->weight = $weight;
    }
}
