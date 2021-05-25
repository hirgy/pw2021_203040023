<?php
include 'config.php';

if (isset($_SESSION['email']) == 0) {
  if ($_SESSION['role'] == "users") {
    header('Location: shop.php');
  }
  header('Location: index.php');
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

  <title>ZOI SHOP</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark bg-success shadow-lg p-3">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="productcategory.php">ZOI SHOP</a>
    <input class="form-control form-control-dark w-25" type="text" placeholder="Search" aria-label="Search">
    <a style="width: 50%;">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link text-white h6" href="logout.php">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light shadow-md sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column mt-3">
            <li class="nav-item active">
              <a class="nav-link text-dark " href="productcategory.php">
                <span data-feather="file"></span>
                Manage Product Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="productbrand.php">
                <span data-feather="file"></span>
                Manage Product Brands
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-secondary" href="product.php">
                <span data-feather="shopping-cart"></span>
                Manage Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="customer.php">
                <span data-feather="users"></span>
                Manage Customer
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="transaction.php">
                <span data-feather="bar-chart-2"></span>
                Manage Transaction
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 mt-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Manage Product Category</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <a href="addcategory.php">
              <button class="btn btn-md btn-primary">
                New Product Category
              </button>
            </a>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped mb-5">
            <thead>
              <tr class="d-flex">
                <th class="col-md-1">No</th>
                <th class="col-md-3">Name</th>
                <th class="col-md-5">Description</th>
                <th class="col-md-3" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM product_categories";
              $stmt = $conn->prepare($sql);
              $stmt->execute();

              $result = $stmt->fetchAll();
              $a = 1;
              foreach ($result as $val) {
              ?>
                <tr class="d-flex">
                  <td class="col-md-1"><?php echo $a ?></td>
                  <td class="col-md-3"><?php echo $val['name']; ?></td>
                  <td class="col-md-5"><?php echo $val['description']; ?></td>
                  <td class="col-md-3" style="text-align: center;">
                    <a href="editcategory.php?id=<?php echo $val['id']; ?>" class="btn btn-success btn-md">
                      <span class="fa fa-edit"></span></a>
                    <a onclick="return confirm('sure to delete brand?')" href="deletecategory.php?id=<?php echo $val['id']; ?>" class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
              <?php
                $a++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </main>
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



</body>

</html>