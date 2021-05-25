<?php
require_once('config.php');

// berikut script untuk proses tambah barang ke database 
if ($_SESSION['role'] == 'admin') {
  if (isset($_POST['name'])) {

    try {
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["photo"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
      if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

      // Check file size
      if ($_FILES["photo"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

      // Allow certain file formats
      if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
      ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }

      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
          echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
          $sql = "insert into brands(name,description,photo) values (:name,:description,:photo)";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':name', $_POST['name']);
          $stmt->bindParam(':description', $_POST['description']);
          $stmt->bindParam(':photo', $_FILES["photo"]["name"]);
          $stmt->execute();

          echo '<script>alert("Success!");window.location="productbrand.php"</script>';
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}


?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Add Brands</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="productcategory.php">ZOI SHOP</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="productbrand.php">Back</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="py-5 text-center">
      <h2>Add Brands</h2>
    </div>

    <div class="row">
      <div class="col-md-3 order-md-1"></div>
      <div class="col-md-6 order-md-1">
        <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
          <div class="mb-3">
            <label for="name">Brands Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid name is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="description">Description <span class="text-muted">(Optional)</span></label>
            <textarea rows="3" class="form-control" id="description" name="description"></textarea>
          </div>


          <div class="mb-3">
            <label for="photo">Photo</label>
            <input type="file" class="form-control pb-5 pt-3" id="photo" name="photo" required>
            <div class="invalid-feedback">
              Please enter file.
            </div>
          </div>

          <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
    </footer>
  </div>

  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')
  </script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/holder.min.js"></script>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>