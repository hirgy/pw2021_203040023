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
        <li class="nav-item active ml-5">
          <a class="nav-link" href="shop.php">Explore
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item ml-5">
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
      <div class="col-lg-3">
        <h1 class="my-4 text-success">Explore</h1>
        <div class="list-group">
          <?php
          $sql = "SELECT * FROM product_categories";
          $stmt = $conn->prepare($sql);
          $stmt->execute();

          $result = $stmt->fetchAll();
          $a = 1;
          foreach ($result as $val) {
          ?>
            <a href="shop.php?category=<?php echo $val['id'] ?>" class="list-group-item text-secondary"><?php echo $val['name'] ?></a>
          <?php
          }
          ?>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row mt-5">
          <?php
          if (isset($_GET['category'])) {
            $sql = "SELECT * FROM product where product_category_id=:category";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':category', $_GET['category']);
          } else {
            $sql = "SELECT * FROM product";
            $stmt = $conn->prepare($sql);
          }
          $stmt->execute();

          $result = $stmt->fetchAll();
          foreach ($result as $val) {
          ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="checkout.php?product=<?php echo $val['id'] ?>"><img class="card-img-top" src="uploads/product/<?php echo $val['photo'] ?>" alt="" style="object-fit: contain;height: 250px;width: 100%; padding: 10px"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a class="text-success" href="checkout.php?product=<?php echo $val['id'] ?>"><?php echo $val['name']; ?></a>
                  </h4>
                  <h5><?php echo $val['price']; ?></h5>
                  <p class="card-text"><?php echo $val['description']; ?></p>
                </div>
                <div class="card-footer bg-success">
                  <small class="  text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
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