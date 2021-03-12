<!--
Nama :Muhammad Rhyamizard Hirgy
NRP : 203040023
Shift : Rabu pukul 09:00 - 10:00 WIB
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1c</title>

    <style>
        .kotak {
            background-color: salmon;
            height: 70px;
            width: 70px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 15px;
            border-radius: 50px;
            display: inline-block;
            border: 3px solid black;
            font-weight: bold;
            font-size:30px;
        }
    </style>
</head>
<body>

<?php for( $i = 1; $i <= 3; $i++ ) : ?>
    <?php for( $j = 1; $j <= $i; $j++ ) : ?>
        <div class="kotak"><?= $i ?></div>
    <?php endfor; ?>
    <br>
<?php endfor; ?>

</body>
</html>