<?php
include("../config/DB_connection.php");

if(isset($_POST['POSTbtn'])){
    $name = $_POST['name'];
    $message = $_POST['message'];

    // echo "Name is ". $name . "and message is " . $message;
   $update_query= "update user SET name= '$name' ,message ='$message' WHERE id = $_GET[id]";
    $execute = mysqli_query($connection, $update_query);

    if($execute){
        echo "Data updated successfully";
        header("location:create.php");
    }
    else {
        echo "Error updating";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Operation</title>
</head>
<body>


<?php
$select_query = "SELECT * FROM user WHERE id = $_GET[id]";
$execute = mysqli_query($connection, $select_query);
$fetch = mysqli_fetch_array($execute);
?>
    <form method="POST">
        <input type="text" name="name" placeholder="Name here..." value="<?php echo $fetch['name'];?>">
        <input type="text" name="message" placeholder="Message here..." value="<?php echo $fetch['message'];?>">

        <input type="submit" name="POSTbtn">
    </form>



</body>
</html>
