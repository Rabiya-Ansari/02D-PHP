<?php

Class Connection{
    private $con;

    public function __construct(){
        $this->con =mysqli_connect("localhost","root","","02d-oopcrud");

        if(!$this->con){
            die("Failed to connect db");
        }
        else{
            echo"DB Connected";
        }
    }
    public function getConnection(){
        return $this->con;
    }
}
?>