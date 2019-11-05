<?php

require_once 'Highway.php';

final class MotorWay extends Highway {

    protected $nbLane = 4;

    protected $maxSpeed = 130 ;

    public function addvehicles(Vehicle $currentVehicles)
    {
        if ($currentVehicles instanceof Truck or $currentVehicles instanceof Car)
        $this->currentVehicles[] = $currentVehicles;
    }

}

final class PedestrianWay extends Highway {

    protected $nbLane = 1;

    protected $maxSpeed = 10 ;

    public function addvehicles(Vehicle $currentVehicles)
    {
        if ($currentVehicles instanceof Vehicle)
            $this->currentVehicles[] = $currentVehicles;
    }


}

final class ResidentialWay extends Highway {

    protected $nbLane = 2;

    protected $maxSpeed = 50 ;

    public function addvehicles(Vehicle $currentVehicles)
    {
        if ($currentVehicles instanceof Bicycle)
            $this->currentVehicles[] = $currentVehicles;

    }
}


