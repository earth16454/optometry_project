<?php
session_start();

if (isset($_POST['submit'])) {
  echo isset($_FILES['img_file2']);
  echo "Hello";

  // $img = $_FILES['img_file2'];

  // $img_file = (isset($_POST['img_file']) ? $_POST['img_file'] : '');
  // $img = $_FILES['img_file']['name'];

  // $allow = array('jpg', 'jpeg', 'png');
  // $extension = explode('.', $img['name']);
  // $fileActExt = strtolower(end($extension));
  // $fileNew = rand() . "." . $fileActExt;
  // $filePath = 'uploads/' . $fileNew;

  // if (in_array($fileActExt, $allow)) {
  //   if ($img['size'] > 0 && $img['error'] == 0) {
  //     if (move_uploaded_file($img['tmp_name'], $filePath)) {
  //       echo "Complete";
  //     }
  //   }
  // }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
  <div class="container mt-5" style="max-width: 960px;">
    <form action="" method="post" class="needs-validation" novalidate>

      <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>

      <input type="file" class="form-control" name="img_file" accept="image/*" required><br>

      <input type="file" name="img_file2" class="form-control">

      <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </form>



  </div>



</body>

</html>