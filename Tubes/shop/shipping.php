<?php
include 'config.php';
  try {
          $sql = "UPDATE orders SET status='shipping' WHERE id=:id"; 
          $stmt = $conn->prepare($sql); 
          $stmt->bindParam(':id', $_GET['id']);
          $stmt->execute();

          echo '<script>alert("Success!");window.location="transaction.php"</script>';
      
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
