<?php
require_once('credentials.php');


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>