<?php
include("./config/db_connection.php");

class Logics {
    private $con;
    public function __construct(){
    $db = new Connection();

    $this->con = $db->getConnection();
    }

    public function create($name, $message){
        $insert_query = "INSERT INTO users(name, message) VALUES('$name', '$message')";
        $result = $this->con->prepare($insert_query);
        $result->execute();

        header("location: create.php");
    }

    public function read(){
        $select_query = "SELECT * FROM users";
        $result = $this->con->prepare($select_query);
        $execute = $result->execute();

        $data = $result->get_result();
        // $data1 = $data->fetch_all(MYSQLI_ASSOC);
        return $data->fetch_all(MYSQLI_ASSOC);
    }





}
?>