<?php

session_start();
require_once("process/config.php");

if (!isset($_SESSION['admin_login'])) {
  $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
  header('location: signin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Page</title>

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="assets/css/admin.css" />
</head>

<body>
  <header class="p-3 mb-3 bg-white shadow-sm">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
          <img src="assets/img/logo.png" width="50" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <div class="input-group">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" />
            <button type="submit" class="input-group-text btn btn-success"><i class="bi bi-search"></i></button>
          </div>
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle" />
          </a>
          <ul class="dropdown-menu text-small" style="">
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <section class="container pt-md-5">
    <?php

    if (isset($_SESSION['admin_login'])) {
      $admin_id = $_SESSION['admin_login'];
      $stmt = $db->query("SELECT * FROM admins WHERE admin_id = $admin_id");
      $stmt->execute();
      $row1 = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    ?>
    <h2 class="">Hi, Admin Thanaphong Songsisai</h2>
    <hr>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name:</th>
            <th>Last Name:</th>
            <th>Birthdate:</th>
            <th>Gender:</th>
            <th>Address:</th>
            <th>Tel:</th>
            <th>Occupation:</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $select_stmt = $db->prepare("SELECT * FROM personal_information");
          $select_stmt->execute();
          while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
          ?>
            <tr>
              <td><?php echo $row["pi_id"]; ?></td>
              <td><?php echo $row["pi_firstname"]; ?></td>
              <td><?php echo $row["pi_lastname"]; ?></td>
              <td><?php echo $row["pi_birthdate"]; ?></td>
              <td><?php echo $row["pi_gender"]; ?></td>
              <td><?php echo $row["pi_address"]; ?></td>
              <td><?php echo $row["pi_tel"]; ?></td>
              <td><?php echo $row["pi_occupation"]; ?></td>
              <td><a href="edit.php?pi_id=<?php echo $row['pi_id']; ?>" class="btn btn-warning">Edit</a></td>
              <td><a href="process/delete.php?delete=<?php echo $row['pi_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </section>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>