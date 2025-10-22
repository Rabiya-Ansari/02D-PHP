<?php
include("../config/DB_connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read Operation</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
        table {
            background-color: wheat;
            width: 100%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table tr th {
            background-color: green;
            font-size: 30px;
        }
        table tr  td{
            text-align: center;
        }
    </style>
</head>

<body>
  <table class=border="1" cellspacing="0" cellpadding="50">

    <tr class="bg-slate-300">
      <th class="border border-gray-300">ID</th>
      <th>Name</th>
      <th>Message</th>
      <th>Action</th>
    </tr>

    <?php
    $select = "SELECT * FROM user";
    $execute = $execute = mysqli_query($connection, $select);
    while ($fetch = mysqli_fetch_array($execute)) {
      ?>

      <tr>
        <td> <?php echo $fetch['id'] ?></td>
        <td><?php echo $fetch['name'] ?></td>
        <td><?php echo $fetch['message'] ?></td>
        <td>
          <a href="update.php?id=<?php echo $fetch['id'] ?>">Edit</a>
          <a href="">Delete</a>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>

  <!-- <table class="border-collapse border border-gray-400 ...">
  <thead>
    <tr>
      <th class="border border-gray-300 ...">State</th>
      <th class="border border-gray-300 ...">City</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-gray-300 ...">Indiana</td>
      <td class="border border-gray-300 ...">Indianapolis</td>
    </tr>
    <tr>
      <td class="border border-gray-300 ...">Ohio</td>
      <td class="border border-gray-300 ...">Columbus</td>
    </tr>
    <tr>
      <td class="border border-gray-300 ...">Michigan</td>
      <td class="border border-gray-300 ...">Detroit</td>
    </tr>
  </tbody>
</table> -->
</body>

</html>