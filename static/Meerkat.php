<?php

class Meerkat
{
    // Class constant
    public const SPECIES = 'Suricata suricatta';

    // Static variable or class variable
    public static int $numInMob = 0;

    // Instance variables
    private string $name;
    private string $occupation;

    public function __construct(string $name, string $job) {
        $this->name = $name;
        $this->occupation = $job;
        self::$numInMob++;
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
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     */
    public function setOccupation(string $occupation): void
    {
        $this->occupation = $occupation;
    }
}
