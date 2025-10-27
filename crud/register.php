<?php
include("../config/DB_connection.php");
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert_query = "INSERT INTO registration(name, email, password) VALUES('$name', '$email', '$password')";
    $execute = mysqli_query($connection, $insert_query);

    if($execute){
        echo "Registered SUccessfully";
    }
    else {
        echo "Registration Failed";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form class="row g-3" method="POST">

        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Name</label>
            <input type="text" class="form-control" id="staticEmail2" placeholder="Name" name="name">
        </div>


        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input type="text" class="form-control" id="staticEmail2" placeholder="Email" name="email">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Password</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" name="register">Register</button>
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>