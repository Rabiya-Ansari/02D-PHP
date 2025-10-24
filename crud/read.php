<?php
include("../config/DB_connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container my-5">
    <div class="card shadow-lg border-0">
      <div class="card-header bg-gradient text-white" style="background: linear-gradient(90deg, #ff7b00, #ff4500);">
        <h4 class="mb-0 fw-bold text-center">User Messages</h4>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Message</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM user";
            $execute = mysqli_query($connection, $select);
            $count = 1;
            while ($fetch = mysqli_fetch_array($execute)) {
              ?>
              <tr>
                <td><?php echo $count++; ?></td>
                <td class="fw-semibold"><?php echo htmlspecialchars($fetch['name']); ?></td>
                <td><?php echo htmlspecialchars($fetch['message']); ?></td>
                <td class="text-center">
                  <a href="update.php?id=<?php echo $fetch['id']; ?>" class="btn btn-sm btn-outline-primary me-2">
                    <i class="bi bi-pencil-square"></i> Edit
                  </a>
                  <a href="delete.php?id=<?php echo $fetch['id']; ?>" class="btn btn-sm btn-outline-danger"
                    onclick="return confirm('Are you sure you want to delete this record?');">
                    <i class="bi bi-trash"></i> Delete
                  </a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>