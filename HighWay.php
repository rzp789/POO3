<?php

abstract class HighWay{

        protected $currentVehicles = [];
        /**
         * @var int
         */
        protected $nbLane;
        /**
         * @var int
         */
        protected $maxSpeed;


        public function __construct(int $nbLane, int $maxSpeed)
{
            $this->nbLane = $nbLane;
            $this->maxSpeed = $maxSpeed;

}

        abstract public function addvehicles(Vehicle $currentVehicles);

        public function getnbLane(): int
{
             return $this->nbLane;
}

        public function setnbLane(int $nbLane): self
{
             $this->nbLane = $nbLane;

             return $this;
}
        public function getmaxSpeed(): int
        {
            return $this->maxSpeed;

        }
        public function setmaxSpeed(int $maxSpeed): self
        {
            $this->maxSpeed = $maxSpeed;

            return $this;
        }


}