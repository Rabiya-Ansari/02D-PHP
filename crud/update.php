<?php
include("../config/DB_connection.php");

// ✅ If form submitted
if (isset($_POST['POSTbtn'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    // ✅ Update query
    $update_query = "UPDATE user SET name='$name', message='$message' WHERE id='$id'";
    $execute = mysqli_query($connection, $update_query);

    if ($execute) {
        // ✅ Redirect to your read.php (table page)
        header("Location: read.php?updated=1");
        exit();
    } else {
        echo "<div class='alert alert-danger'>❌ Error updating record.</div>";
    }
}

// ✅ Fetch record by ID to show current values
$id = $_GET['id'];
$select_query = "SELECT * FROM user WHERE id='$id'";
$execute = mysqli_query($connection, $select_query);
$fetch = mysqli_fetch_array($execute);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow border-0 mx-auto" style="max-width: 600px;">
      <div class="card-header bg-primary text-white text-center fw-bold">
         Edit User Information
      </div>
      <div class="card-body">
        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control"
                   value="<?php echo htmlspecialchars($fetch['name']); ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" required><?php echo htmlspecialchars($fetch['message']); ?></textarea>
          </div>

          <button type="submit" name="POSTbtn" class="btn btn-success w-100">Update</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
