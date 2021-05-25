<?php
require_once('config.php');
	
	if(!empty($_POST['name'])){
		
		$sql = 'UPDATE brands SET name=:name,description=:description WHERE id=:id';
		$row = $conn->prepare($sql);

        $row->bindParam(':name', $_POST['name']);
        $row->bindParam(':description', $_POST['description']);
        $row->bindParam(':id', $_GET["id"]);
		$row->execute();
		
		// redirect
		echo '<script>alert("Success!");window.location="productbrand.php"</script>';
	}
	// untuk menampilkan data barang berdasarkan id barang
	$id = $_GET['id'];
	$sql = "SELECT *FROM brands WHERE id= ?";
	$row = $conn->prepare($sql);
	$row->execute(array($id));
	$result = $row->fetch();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Brands - <?php echo $result['name'];?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
	      <div class="py-5 text-center">
	        <h2>Add Brands</h2>
	      </div>

	      <div class="row">
	        <div class="col-md-3 order-md-1"></div>
	        <div class="col-md-6 order-md-1">
	          <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
	            <div class="mb-3">
	              <label for="name">Brands Name</label>
	              <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $result['name']?>" required>
	              <div class="invalid-feedback">
	                Valid name is required.
	              </div>
	            </div>

	            <div class="mb-3">
	              <label for="description">Description <span class="text-muted">(Optional)</span></label>
	              <textarea rows="3" class="form-control" id="description" name="description" value="<?php echo $result['description']?>"></textarea>
	            </div>



	            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
	          </form>
	        </div>
	      </div>

	      <footer class="my-5 pt-5 text-muted text-center text-small">
	      </footer>
	    </div>

	    <script src="assets/js/jquery-3.2.1.slim.min.js" ></script>
	    <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script>
	    <script src="assets/js/popper.min.js"></script>
	    <script src="assets/js/bootstrap.min.js"></script>
	    <script src="assets/js/holder.min.js"></script>

	    <script>
	      // Example starter JavaScript for disabling form submissions if there are invalid fields
	      (function() {
	        'use strict';

	        window.addEventListener('load', function() {
	          // Fetch all the forms we want to apply custom Bootstrap validation styles to
	          var forms = document.getElementsByClassName('needs-validation');

	          // Loop over them and prevent submission
	          var validation = Array.prototype.filter.call(forms, function(form) {
	            form.addEventListener('submit', function(event) {
	              if (form.checkValidity() === false) {
	                event.preventDefault();
	                event.stopPropagation();
	              }
	              form.classList.add('was-validated');
	            }, false);
	          });
	        }, false);
	      })();
	    </script>
	</body>
</html>
