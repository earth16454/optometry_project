<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Basic Upload PHP PDO by devbanban.com 2021</title>
    <!-- sweet alert  -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7"> <br>
                <h3>PHP PDO Basic Upload Image File</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="img_name" required class="form-control" placeholder="ชื่อภาพ"> <br>
                    <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>
                    <input type="file" name="img_file" required class="form-control" accept="image/jpeg, image/png, image/jpg"> <br>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                <h3>รายการภาพ </h3>
                <table class="table table-striped  table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">ลำดับ</th>
                            <th width="65%">ชื่อภาพ</th>
                            <th width="30%">ภาพ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //คิวรี่ข้อมูลมาแสดงในตาราง
                        require_once 'connect.php';
                        $stmt = $conn->prepare("SELECT* FROM tbl_uploads");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $k) {
                        ?>
                            <tr>
                                <td><?= $k['no']; ?></td>
                                <td><?= $k['img_name']; ?></td>
                                <td><img src="upload/<?= $k['img_file']; ?>" width="70px"></td>
                            <?php } ?>
                    </tbody>
                </table>
                <br>
                <center>Basic Upload PHP PDO by devbanban.com 2021</center>
            </div>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['img_name'])) {
    require_once 'connect.php';
    //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ใหม่
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $img_file = (isset($_POST['img_file']) ? $_POST['img_file'] : '');
    $upload = $_FILES['img_file']['name'];

    //มีการอัพโหลดไฟล์
    if ($upload != '') {
        //ตัดขื่อเอาเฉพาะนามสกุล
        $typefile = strrchr($_FILES['img_file']['name'], ".");

        //สร้างเงื่อนไขตรวจสอบนามสกุลของไฟล์ที่อัพโหลดเข้ามา
        if ($typefile == '.jpg' || $typefile  == '.jpeg' || $typefile  == '.png') {

            //โฟลเดอร์ที่เก็บไฟล์
            $path = "upload/";
            //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
            $newname = $numrand . $date1 . $typefile;
            $path_copy = $path . $newname;
            //คัดลอกไฟล์ไปยังโฟลเดอร์
            move_uploaded_file($_FILES['img_file']['tmp_name'], $path_copy);

            //ประกาศตัวแปรรับค่าจากฟอร์ม
            $img_name = $_POST['img_name'];

            //sql insert
            $stmt = $conn->prepare("INSERT INTO tbl_uploads (img_name, img_file) VALUES (:img_name, '$newname')");
            $stmt->bindParam(':img_name', $img_name, PDO::PARAM_STR);
            $result = $stmt->execute();
            //เงื่อนไขตรวจสอบการเพิ่มข้อมูล
            if ($result) {
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "อัพโหลดภาพสำเร็จ",
                          type: "success"
                      }, function() {
                          window.location = "upload.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            } else {
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เกิดข้อผิดพลาด",
                          type: "error"
                      }, function() {
                          window.location = "upload.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            } //else ของ if result


        } else { //ถ้าไฟล์ที่อัพโหลดไม่ตรงตามที่กำหนด
            echo '<script>
                         setTimeout(function() {
                          swal({
                              title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
                              type: "error"
                          }, function() {
                              window.location = "upload.php"; //หน้าที่ต้องการให้กระโดดไป
                          });
                        }, 1000);
                    </script>';
        } //else ของเช็คนามสกุลไฟล์

    } // if($upload !='') {

    $conn = null; //close connect db
} //isset
?>