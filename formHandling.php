<?php

if(isset($_POST['create'])){
    $name = $_POST['textName'];   
    $message = $_POST['textMessage'];  
    
    echo $name . $message;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Example</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="textName" placeholder="Enter Your Name">
        <input type="text" name="textMessage" placeholder="Enter Your Message">

        <button name="create">Add</button>
    </form>



</body>