<?php
Require_once('./car.php');

class UberBlack extends Car {
    public $TypeCarAcceptaed;
    public $SeatsMaterial;
    
    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial) {
        parent::__construct($license, $driver);
        $this -> typeCarAccepted = $typeCarAccepted;
        $this -> seatsMaterial = $seatsMaterial;
    }
}