<?php
session_start();

// If user is already logged in, redirect to welcome page
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}
?>

<form method="POST">
    name: <input type="text" name="name" required><br><br>
    password: <input type="password" name="password" required><br><br>
    <button type="submit" name="submit">Login</button>
</form>

<?php
$connect = mysqli_connect("localhost", "root", "", "202502d");
if (!$connect) {
    echo "Database not connected";
    exit();
}

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
    $run_query = mysqli_query($connect, $query);
    $num_rows = mysqli_num_rows($run_query);

    if ($num_rows == 1) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo " Invalid username or password";
    }
}
?>
