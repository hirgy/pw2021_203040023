<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

// mengambil ig dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil ditambahkan);
          document.location.href = 'index.php';
        </script>";
} else {
  echo "data gagal ditambahkan!";
}