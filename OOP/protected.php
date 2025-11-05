<?php

class Car {
    protected $engine = "V8";
}

class SportsCar extends Car {
    public function showEngine() {
        echo $this->engine; //  allowed (child class)
    }
}

$sc = new SportsCar();
$sc->showEngine();   //  Works
// $sc->engine = "V6";  Error — direct access not allowed




?>