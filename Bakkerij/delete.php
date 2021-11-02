<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];

  $sql = "DELETE FROM broodjes where broodnr=$id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  header("Location: display.php");
}


?>