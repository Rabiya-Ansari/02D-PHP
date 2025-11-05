<?php

class Car {
    private $color; // private variable

    public function setColor($c) {
        $this->color = $c; //  allowed (inside class)
    }

    public function showColor() {
        echo $this->color;
    }
}

$car1 = new Car();
$car1->setColor("Blue"); //  allowed (through public function)
$car1->showColor();      //  allowed
// $car1->color = "Red"; Error — direct access not allowed


?>