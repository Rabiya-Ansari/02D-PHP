<?php

class Car{
    public $color;
    public $tyre;

    function getColor($a){
        $this->color = $a;

        echo $this->color;
    }

    function getTyres($b){
        $this->tyre = $b;

        echo $this->tyre;
    }
}

$car1 = new Car();
$car2 = new Car();

$car1->getColor("Blue");
$car2->getTyres("Panther");
?>