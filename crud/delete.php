<?php

include("../config/DB_connection.php");

if(isset($_GET['id'])){
    $delete_query = "DELETE FROM user WHERE id = $_GET[id]"; 
    $execute = mysqli_query($connection, $delete_query);

    if($execute){
        header("location: read.php");
    }
    else {
        echo "Error deleting";
    }
}
?>