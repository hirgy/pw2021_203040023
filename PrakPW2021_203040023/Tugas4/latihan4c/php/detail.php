<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require '../php/functions.php';
$id = $_GET["id"];
$bundle = query("SELECT * FROM bundle WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Bundle Valorant</title>
</head>

<body>
    <div class="container">
        <div class="detail">
            <img class="image" src="../assets/img/<?= $bundle['Picture'] ?>" alt="">
            <h3> <?= $bundle["Name"] ?></h3>
            <p><?= $bundle['Description'] ?>
            <ul><?= $bundle['Detail'] ?></ul>
            </p>
            <hr>
            <h6>Stock Item : <?= $bundle['StokItem'] ?> | Price : Rp.<?= $bundle['Price'] ?></h6>
            <a href="../index.php"><button class="button warning"> Back</button> </a>
        </div>
    </div>


    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>