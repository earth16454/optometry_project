<?php
session_start();

if (isset($_POST['submit'])) {
  $img1 = $_FILES['img_file1'];
  $img2 = $_FILES['img_file2'];

  $allow = array('jpg', 'jpeg', 'png');
  $extension1 = explode('.', $img1['name']);
  $extension2 = explode('.', $img2['name']);

  $fileActExt1 = strtolower(end($extension1));
  $fileActExt2 = strtolower(end($extension2));

  $fileNew1 = rand() . "." . $fileActExt1;
  $fileNew2 = rand() . "." . $fileActExt2;

  $filePath1 = 'uploads/' . $fileNew1;
  $filePath2 = 'uploads/' . $fileNew2;

  if ((in_array($fileActExt1, $allow) && (in_array($fileActExt2, $allow)))) {
    if (($img1['size'] > 0 && $img1['error'] == 0) && ($img2['size'] > 0 && $img2['error'] == 0)) {
      if ((move_uploaded_file($img1['tmp_name'], $filePath1)) && (move_uploaded_file($img2['tmp_name'], $filePath2))) {
        echo "Complete";
      }
    }
  }
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
    <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>

      <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>

      <input type="file" class="form-control" name="img_file1" accept="image/jpeg, image/png, image/jpg" required><br>
      <input type="file" class="form-control" name="img_file2" accept="image/jpeg, image/png, image/jpg" required><br>

      <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </form>



  </div>



</body>

</html>