<?php

include("./config/DB_Connection.php");

if(isset($_POST['POSTbtn'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $insert_query = "INSERT INTO users(name, password) VALUES('$name', '$password')";
    $execute = mysqli_query($connection, $insert_query);

    if($execute){
        echo "Data inserted successfully";
        header("location:form.php");
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
    <title>POST Example</title>
</head>
<body>

    <form  method="POST" >
        <input type="text" name="name" placeholder="Name here...">
        <input type="password" name="password" placeholder="Password here...">

        <input type="submit" name="POSTbtn">
    </form>



</body>
</html>