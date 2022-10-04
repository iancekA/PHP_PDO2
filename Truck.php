<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $stockage;

    private int $loading;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $stockage)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockage = $stockage;
        $this->loading = 0;
    }

    public function isFilled(): string
    {
        if ($this->loading >= $this->stockage){
            return nl2br("\nFull ! Truck is filled by $this->loading \n");
        } else {
            $oldLoading = $this->loading;
            $this->loading = $this->stockage;
            return nl2br("\nTruck was ". $oldLoading . ", now in filling !\n");
        }
    }

    public function getStockage(): int
    {
        return $this->stockage;
    }

    public function setStockage(int $stockage): void
    {
        $this->stockage = $stockage;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}