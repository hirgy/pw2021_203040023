<?php

require_once('config.php');

$sql = "select p.name as product_name, b.name as brand_name, p.price as price from product p join brands b on p.brand_id=b.id where p.id=:product";
$data = $conn->prepare($sql);
$data->bindParam(':product', $_GET['product']);
$data->execute();
$product = $data->fetch();

if (isset($_POST['qty'])) {
  try {
    $total = $product['price'] * $_POST['qty'];
    echo $total;
    echo $_SESSION['id'];
    $sql = "insert into orders(customer_id,product_id,qty,address,total,payment_method) values (:customer_id,:product_id,:qty,:address,:total,:payment_method)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customer_id', $_SESSION['id']);
    $stmt->bindParam(':product_id', $_GET['product']);
    $stmt->bindParam(':qty', $_POST['qty']);
    $stmt->bindParam(':address', $_POST['address']);
    $stmt->bindParam(':total', $total);
    $stmt->bindParam(':payment_method', $_POST['payment_method']);
    $stmt->execute();

    echo '<script>alert("Success!");window.location="shop.php"</script>';
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
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
  <nav class="navbar  navbar-dark bg-success shadow-lg p-3">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="shop.php">ZOI SHOP</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link text-white h6" href="shop.php">Back</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="assets/img/fav.png" alt="" width="72" height="72">
      <h2>Checkout form</h2>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">1</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><?php echo $product['product_name'] ?></h6>
              <small class="text-muted"><?php echo $product['brand_name'] ?></small>
            </div>
            <span class="text-muted"><?php echo $product['price'] ?></span>
          </li>
        </ul>

      </div>
      <div class="col-md-8 order-md-1">
        <form class="needs-validation" method="post" action="" novalidate>

          <div class="mb-3">
            <label for="quantity">Quantity</label>
            <input type="number" min="1" class="form-control" name="qty" id="quantity">
            <div class="invalid-feedback">
              Please enter quantity.
            </div>
          </div>


          <div class="mb-3">
            <label for="address">Address</label>
            <textarea type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required></textarea>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio mb-3">
              <input id="cod" name="payment_method" value="Cash on Delivery" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="cod">Cash on Delivery</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="payment_method" value="Debit Card" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-lg bg-white border border-success btn-block text-success mb-5" type="submit">checkout</button>
        </form>
      </div>
    </div>
  </div>

  <footer class="py-3 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Hirgy 2021</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
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