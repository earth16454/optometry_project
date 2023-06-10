<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
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

  <link rel="stylesheet" href="assets/css/signin.css" />
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary" cz-shortcut-listen="true">
  <main class="form-signin w-100 m-auto">

    <form action="process/login.php" method="post" class="needs-validation" novalidate>
      <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php
          echo $_SESSION['error'];
          unset($_SESSION['error']);
          ?>
        </div>
      <?php } ?>
      <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert">
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </div>
      <?php } ?>
      
      <div class="text-center">
        <img src="assets/img/logo.png" class="mb-4 img-fluid" width="150" alt="" />
      </div>
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required />
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
        <label for="password">Password</label>
      </div>


      <!-- <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
        </div> -->

      <button class="btn btn-primary w-100 py-2" name="signin" type="submit">Sign in</button>
    </form>
    <footer class="mt-5">
      <p class="pt-5 mb-3 text-body-secondary">
        © 2023. Designed by
        <a href="https://getlinks.com/p/9sep?fbclid=IwAR3fb972dHqISVes5p5a5MdYuudvISWeoAwfi3mjOKv75HHn1j9mhtg9Egg">9sep</a>
      </p>
    </footer>
  </main>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>