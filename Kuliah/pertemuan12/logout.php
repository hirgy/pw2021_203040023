<?php
/* 
Muhammad Rhyamizard Hirgy
203040023
https://github.com/hirgy/pw2021_203040023
Pertemuan 12 - 6 Mei 2021
Login & Registrasi
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
