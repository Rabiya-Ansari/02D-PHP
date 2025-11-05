<?php

class School{
    public $classroom = "On First Floor";
    // private $classroom = "On First Floor";
    // protected $classroom = "On First Floor";
}

class Academics extends School{
    public $teacher = "Ali";
}


$s1 = new School();

$c1 = new Academics();

echo $c1->classroom;

// echo $s1->classroom;






?>