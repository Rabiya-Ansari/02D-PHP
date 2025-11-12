<?php
include("./logics.php");



if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $db = new Logics();
    $db->edit($name, $message, $_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="name">
        <textarea name="message"></textarea>
        <button name="edit">Edit Data</button>
    </form>
</body>

</html>