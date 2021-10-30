<?php
require 'credentials.php';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>