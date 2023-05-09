<?php

require_once 'Vehicle.php';
class Ford extends Vehicle
{
    private string $manufacturer = 'Ford';

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }
}
