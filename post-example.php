<?php

include("./config/DB_Connection.php");

if(isset($_POST['POSTbtn'])){
    $name = $_POST['name'];
    $message = $_POST['message'];

    $insert_query = "INSERT INTO user(name, message) VALUES('$name', '$message')";
    $execute = mysqli_query($connection, $insert_query);

    if($execute){
        echo "Data inserted successfully";
        header("location:POSTform.php");
        
    }
    else {
        echo "Error inserting";
    }
}

?>