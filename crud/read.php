<?php
include("../config/DB_connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>

<body>
  <table class="table ">

    <tr class="table-secondary " >
      <th >ID</th>
      <th >Name</th>
      <th >Message</th>
      <th >Action</th>
    </tr>

    <?php
    $select = "SELECT * FROM user";
    $execute = $execute = mysqli_query($connection, $select);
    while ($fetch = mysqli_fetch_array($execute)) {
      ?>

      <tr class="table-light">
        <td > <?php echo $fetch['id'] ?></td>
        <td ><?php echo $fetch['name'] ?></td>
        <td ><?php echo $fetch['message'] ?></td>
        <td >
          <a href="update.php?id=<?php echo $fetch['id'] ?>">Edit</a>
          <a href="delete.php?id=<?php echo $fetch['id']?>">Delete</a>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
