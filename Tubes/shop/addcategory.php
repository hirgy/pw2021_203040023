<?php
require_once('config.php');

// berikut script untuk proses tambah barang ke database 
if ($_SESSION['role'] == 'admin') {
  if (isset($_POST['name'])) {

    try {

      $sql = "insert into product_categories(name,description) values (:name,:description)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':name', $_POST['name']);
      $stmt->bindParam(':description', $_POST['description']);
      $stmt->execute();

      echo '<script>alert("Success!");window.location="productcategory.php"</script>';
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
        <a class="nav-link" href="productcategory.php">Back</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="py-5 text-center">
      <h2>Add Category</h2>
    </div>

    <div class="row">
      <div class="col-md-3 order-md-1"></div>
      <div class="col-md-6 order-md-1">
        <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
          <div class="mb-3">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid name is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="description">Description <span class="text-muted">(Optional)</span></label>
            <textarea rows="3" class="form-control" id="description" name="description"></textarea>
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