<?php

class Car {
    public $color;//public variable andar or bhar se bhi used hoskta hay
   
    public function setColor($c){
         $this->color =$c;
    }
}
$car1 =new Car();
$car1->color = "Red";
echo $car1->color;

?>