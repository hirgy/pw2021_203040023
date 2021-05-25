<?php
include 'config.php';

if (isset($_SESSION['email']) == 0) {

  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/img/favicon.jpg">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar  navbar-dark bg-success shadow-lg p-3">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="shop.php">ZOI SHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-5">
          <a class="nav-link" href="shop.php">Explore
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active ml-5">
          <a class="nav-link" href="my.php">My Orders</a>
        </li>

        <li class="nav-item ml-5">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-12 mt-5">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT o.qty as qty, o.total as total, o.status as status, p.name as name, p.photo as photo, p.price as price FROM orders o join product p on o.product_id=p.id where o.customer_id=:customer";
              $stmt = $conn->prepare($sql);
              $stmt->bindParam(':customer', $_SESSION['id']);
              $stmt->execute();

              $result = $stmt->fetchAll();
              $a = 1;
              foreach ($result as $val) {
              ?>
                <tr>
                  <td><?php echo $a ?></td>
                  <td><img style="max-height: 100px" src="uploads/product/<?php echo $val['photo'] ?>"></td>
                  <td><?php echo $val['name']; ?></td>
                  <td><?php echo $val['price']; ?></td>
                  <td><?php echo $val['qty']; ?></td>
                  <td><?php echo $val['total']; ?></td>
                  <td><?php echo $val['status']; ?></td>
                </tr>
              <?php
                $a++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="py-3 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Hirgy 2021</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')
  </script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>