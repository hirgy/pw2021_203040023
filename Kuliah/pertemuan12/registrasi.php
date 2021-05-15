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
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('user baru berhasil di tambahkan. Silahkan login');
          document.location.href = 'login.php';
        </script>";
  } else {
    echo "user gagal ditambahkan!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h3>Form Registrasi</h3>
  <form method="post" action="">
    <ul>
      <li><label>
          Username
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label></li>
      <li><label>
          Password
          <input type="password" name="password1" required>
        </label></li>
      <li><label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label></li>
      <li><button type="submit" name="registrasi">Registrasi</button></li>
    </ul>
  </form>
</body>

</html>