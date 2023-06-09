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

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/style.css?v=2" />
  <link rel="stylesheet" href="assets/css/mediaqueries.css" />
</head>

<body>
  <!-- ======= Sidebar ======= -->
  <main id="main" class="main">
    <div class="container">
      <section class="section">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Input / Form</h5>

            <!-- Default Tabs -->
            <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">
                  เอกสาร 1
                </button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">
                  เอกสาร 2
                </button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">
                  เอกสาร 3
                </button>
              </li>
            </ul>
            <br />
            <form action="" method="post" class="needs-validation" novalidate>
              <div class="tab-content pt-2" id="myTabjustifiedContent">
                <!-- Page 1 -->
                <?php // include_once('component/page1.html'); ?>

                <!-- Page 2 -->
                <?php include_once('component/page2.html'); ?>
                <?php include_once('component/page3.html'); ?>

                <button type="submit" name="submit" class="btn btn-success w-100">Submit</button>

              </div>
            </form>
          </div>
          <!-- End Default Tabs -->
        </div>
      </section>
    </div>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ลงชื่อ</span></strong>. All Rights Reserved
    </div>
    <div class="credits">Designed by <a href="https://www.facebook.com/Frankie651">Frankie</a></div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
  <script>
    function toggleInput(radio) {
      var inputId = "input" + radio.id.substring(10); // ดึงเลขท้ายจาก id ของ radio
      var input = document.getElementById(inputId);

      var inputs = document.querySelectorAll("div.col-sm-9#radioGroup input[type='text'].form-control");

      if (radio.checked) {
        input.disabled = false;
        inputs.forEach(function(input) {
          input.disabled = input !== document.getElementById(inputId);
        });
      } else {
        input.disabled = true;
        inputs.forEach(function(input) {
          input.disabled = false;
        });
      }
    }
  </script>

  <script>
    function toggleInput2(radio) {
      var inputId = "input" + radio.id.substring(5); // ดึงเลขท้ายจาก id ของ radio
      var input = document.getElementById(inputId);

      var inputs = document.querySelectorAll("div.col-sm-9#radioGroup2 input[type='text'].form-control");

      if (radio.checked) {
        input.disabled = false;
        inputs.forEach(function(input) {
          input.disabled = input !== document.getElementById(inputId);
        });
      } else {
        input.disabled = true;
        inputs.forEach(function(input) {
          input.disabled = false;
        });
      }
    }
  </script>

  <script>
    function toggleInput3(radio) {
      var inputId = "input" + radio.id.substring(5); // ดึงเลขท้ายจาก id ของ radio
      var input = document.getElementById(inputId);

      var inputs = document.querySelectorAll("div.col-sm-12#radioGroup3 input[type='text'].form-control");

      if (radio.checked) {
        input.disabled = false;
        inputs.forEach(function(input) {
          input.disabled = input !== document.getElementById(inputId);
        });
      } else {
        input.disabled = true;
        inputs.forEach(function(input) {
          input.disabled = false;
        });
      }
    }
  </script>

  <script>
    function toggleInput4(checkbox) {
      var inputId = "input" + checkbox.id.substring(8); // ดึงเลขท้ายจาก id ของ checkbox
      var input = document.getElementById(inputId);

      var inputs = document.querySelectorAll("div#checkbox1Group1 input[type='text'].form-control");

      if (checkbox.checked) {
        input.disabled = false;
        inputs.forEach(function(input) {
          input.disabled = input !== document.getElementById(inputId);
        });
      } else {
        input.disabled = true;
        inputs.forEach(function(input) {
          input.disabled = false;
        });
      }
    }
  </script>

  <script>
    function toggleInput6(checkbox) {
      var inputId = "input" + checkbox.id.substring(8); // ดึงเลขท้ายจาก id ของ checkbox
      var input = document.getElementById(inputId);

      if (checkbox.checked) {
        input.disabled = false;
      } else {
        input.disabled = true;
      }
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      "use strict";

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll(".needs-validation");

      // Loop over them and prevent submission
      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            var failed = false;

            if ($("[name='ohe_checkbox1']:checked").length == 0) {
              $("[name='ohe_checkbox1']").attr("required", true);
              failed = true;
            } else {
              $("[name='ohe_checkbox1']").attr("required", false);
            }

            if ($("[name='ohe_checkbox2']:checked").length == 0) {
              $("[name='ohe_checkbox2']").attr("required", true);
              failed = true;
            } else {
              $("[name='ohe_checkbox2']").attr("required", false);
            }

            if ($("[name='ohe_checkbox3']:checked").length == 0) {
              $("[name='ohe_checkbox3']").attr("required", true);
              failed = true;
            } else {
              $("[name='ohe_checkbox3']").attr("required", false);
            }

            if ($("[name='ohe_checkbox4']:checked").length == 0) {
              $("[name='ohe_checkbox4']").attr("required", true);
              failed = true;
            } else {
              $("[name='ohe_checkbox4']").attr("required", false);
            }

            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();
  </script>
</body>

</html>