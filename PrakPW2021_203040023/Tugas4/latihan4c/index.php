<?php
// Menghubungkan dengan file php lainya 
require 'php/functions.php';
//melakukan query 
$bundle = query("SELECT * FROM bundle");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <title>Bundle Valorant</title>
</head>

<body>
    <div class="container">
        <div class="grid">
            <div class="row">
                <?php
                foreach ($bundle as $bdl) :
                ?>
                    <div class="cell-md-3">
                        <div class="card">
                            <div class="card-header">
                                <img style="width: 100%;" src="assets/img/<?= $bdl['Picture'] ?>">
                            </div>
                            <div class="card-content p-2">
                                <a class="text-center" href="php/detail.php?id=<?= $bdl["id"] ?>"><?= $bdl["Name"] ?> </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>