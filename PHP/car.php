<?php
require_once('./account.php');

class Car
{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {

        echo
        "La Licencia es: {$this->license} <br/>
        El conductor es: {$this->driver->name} <br/>
        Numero de Pasajeros: {$this->passenger} <br/>
        <br/>";
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function setPassenger($passenger)
    {

        if ($passenger == 4) {
            $this->passenger = $passenger;
        } else {
            echo "Necesitas asignar 4 pasajeros";
        }
    }
}