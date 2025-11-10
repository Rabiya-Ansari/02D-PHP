<?php
include("./logics.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Message</th>
        </tr>

        <?php
        $db = new Logics();

        $users = $db->read();

        foreach($users as $user){
        ?>
        <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['message']?></td>
        </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>