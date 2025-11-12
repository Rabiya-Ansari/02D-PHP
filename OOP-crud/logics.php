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
        return $data->fetch_all(MYSQLI_ASSOC);
    }

    public function edit($name, $message, $id){

        $update_query = "UPDATE users SET name = '$name', message = '$message' WHERE id = $id";
        $result = $this->con->prepare($update_query);
        $execute = $result->execute();

        header("location: read.php");
    }

}
?>
