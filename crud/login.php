<?php
session_start();
include("../config/DB_connection.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
    $execute = mysqli_query($connection, $select_query);
    $count = mysqli_num_rows($execute);
    $fetch = mysqli_fetch_array($execute);

    echo $count;

    if($count > 0){
        $_SESSION['email'] = $fetch['email'];
        $_SESSION['password'] = $fetch['password'];

        header("location: read.php");
    }
    else {
        header("location: login.php");
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <a href="register.php">Register</a>
    <form class="row g-3" method="POST">

        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input type="text" class="form-control" id="staticEmail2" placeholder="Email" name="email">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Password</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>