<?php
include("../config/DB_connection.php");

if(isset($_POST['POSTbtn'])){
    $name = $_POST['name'];
    $message = $_POST['message'];

    // echo "Name is ". $name . "and message is " . $message;
    $insert_query = "INSERT INTO user(name, message) VALUES('$name', '$message')";
    $execute = mysqli_query($connection, $insert_query);

    if($execute){
        echo "Data inserted successfully";
        header("location: create.php");
    }
    else {
        echo "Error inserting";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Operation</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="name" placeholder="Name here...">
        <input type="text" name="message" placeholder="Message here...">

        <input type="submit" name="POSTbtn">
    </form>



</body>
</html>