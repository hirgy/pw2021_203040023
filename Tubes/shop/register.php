<?php
include 'config.php';

if (!isset($_SESSION['email']) == 0) {
  header('Location: product.php');
}
if (isset($_POST['name'])) {
  $sql = "insert into customer(name,email,password,phone) values (:name,:email,:password,:phone)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':password', $_POST['password']);
  $stmt->bindParam(':phone', $_POST['phone']);
  $stmt->execute();
  echo '<script>alert("Success!");window.location="index.php"</script>';
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/img/favicon.jpg">

  <title>Checkout example for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
  <form class="needs-validation" method="post" novalidate>
    <div class="container bg-white border border-success rounded-lg shadow-lg w-50 mt-5">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/fav.png" alt="" width="72" height="72">
        <h2 class="text-success text-center">Welcome to Zoi Shop</h2>
        <h3 class="text-success text-center">Register your account</h3>
      </div>

      <div class="row col-lg mx-auto mb-2">
        <div class="col-lg">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
          <div class="invalid-feedback" style="width: 100%;">
            Your name is required.
          </div>
        </div>
        <div class="col-lg">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="email@email.com" id="email" name="email" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
      </div>

      <div class="row col-lg mx-auto mb-3">
        <div class="col-lg">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
          <div class="invalid-feedback">
            Please enter your Password.
          </div>
        </div>
        <div class="col-lg">
          <label for="phone">Phone<span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
        </div>
      </div>

      <div class="col-lg mb-2">
        <button class="btn btn-lg bg-white border border-success text-success ml-3" style="width: 95%;" type="submit">Register</button>
      </div>
      <div class="col-lg mb-5">
        <a href="index.php">
          <div class="btn btn-lg btn-success btn-block text-white  ml-3" style="width: 95%;" >Login</div>
        </a>
      </div>
    </div>
  </form>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')
  </script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/holder.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
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