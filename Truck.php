<?php

require_once 'Vehicle.php';
class Truck extends Vehicle {

    private $cargo_capacity;

    private $cargo;

    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $cargo_capacity)
    {
        parent::__construct($color, $nbSeats);

        $this->energy = $energy;
        $this->cargo_capacity = $cargo_capacity;
    }
    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo): self
    {
        $this->cargo = $cargo;
        return $this;
    }
    public function getCargo_capacity(): int
    {
        return $this->cargo_capacity;
    }

    public function setCargo_capacity(int $cargo_capacity): self
    {
        $this->cargo = $cargo_capacity;
        return $this;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): self
    {
        $this->energy = $energy;

        return $this;
    }

    public function filling(): string
    {
        if ($this->cargo_capacity == $this->cargo){
            return 'full';

        }
        elseif ($this->cargo <= $this->cargo_capacity){
            return 'in filling';
    }
        elseif ($this->cargo >= $this->cargo_capacity){
            return 'if you need to transport '.$this->getCargo(). ', take another truck, this one can charge only'.$this->getCargo_capacity();

    }}
}