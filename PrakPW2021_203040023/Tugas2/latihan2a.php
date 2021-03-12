<?php

// Nama :Muhammad Rhyamizard Hirgy
// NRP : 203040023
// Shift : Rabu pukul 09:00-10:00 WIB

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan2a_203040083</title>
    <style>
        .tulisan {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            padding-left: 20px;
        }

        .pembungkus {
            border: 1px solid black;
            box-shadow: 2px 2px 3px 3px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <?php

    function gantiStyle($tulisan, $style1, $style2)
    {
        echo "<div class = '$style1'> 
            <h3 class =  '$style2'>  $tulisan </h3>
        </div>";
    }
    ?>

    <?php
    echo gantiStyle("Selamat datang di praktikum PW", "pembungkus", "tulisan");
    ?>
</body>


</html>