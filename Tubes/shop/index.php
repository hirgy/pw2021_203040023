<?php
include 'config.php';

if (!isset($_SESSION['email']) == 0) {
  if ($_SESSION['role'] == "users") {
    header('Location: shop.php');
  }
  header('Location: productcategory.php');
}

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  try {
    $sql = "SELECT id FROM admin WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
      $data = $stmt->fetch();

      $_SESSION['email'] = $email;
      $_SESSION['id'] = $data['id'];
      $_SESSION['role'] = "admin";
      header("Location: product.php");
      return;
    } else {
      try {
        $sql = "SELECT id FROM customer WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $data = $stmt->fetch();
        if ($stmt->rowCount() == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['id'] = $data['id'];
          $_SESSION['role'] = "users";
          header("Location: shop.php");
          return;
        } else {
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
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

  <title>Signin</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="signin.css" rel="stylesheet">
</head>

<body class="bg-light">
  <form class="form-signin" action="" method="post">
    <div class="container bg-white border border-success rounded-lg shadow-lg w-25 mt-5">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/fav.png" alt="" width="72" height="72">
        <h2 class="text-success text-center">Welcome to Zoi Shop</h2>
        <h3 class="text-success text-center">Sign into you account</h3>
      </div>

      <div class="col-md-10 mx-auto mb-5">
        <form class="form-signin" action="" method="post">
          <div class="mb-3">
            <label for="inputEmail">Email address</label>
            <div class="input-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus><br />
              <div class="invalid-feedback" style="width: 100%;">
                Please enter a valid email address.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="inputPassword">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required><br />
            <div class="invalid-feedback">
              Please enter a valid password.
            </div>
          </div>

          <button class="btn btn-lg bg-white border border-success btn-block text-success" type="submit">Sign in</button>
          <a href="register.php">
            <div style="margin-top: 10px" class="btn btn-lg btn-success btn-block text-white">Register</div>
          </a>
        </form>
      </div>
    </div>
  </form>
</body>

</html>