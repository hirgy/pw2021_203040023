<?php
require_once('config.php');
	// untuk Hapus data barang berdasarkan id barang
	$id = $_GET['id'];
	$sql = "DELETE FROM brands WHERE id= ?";
	$row = $conn->prepare($sql);
	$row->execute(array($id));
	
	echo '<script>alert("Success");window.location="productbrand.php"</script>';
?>
