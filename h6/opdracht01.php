<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, tr, td {
      border: solid 1px black;
      border-collapse: collapse;
    }

    td {
      padding: 20px;
    }
  </style>
</head>
<body>
  
<table>
<?php
require_once ('credentials.php');

try {
  $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);

 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die ("Error1");
$stmt->execute() or die ("Error2");

while ($row = $stmt->fetch()) {
  echo "<tr>";
  echo "<td>".$row['cursistnr']."</td>";
  echo "<td>".$row['naam']."</td>";
  echo "<td>".$row['roepnaam']."</td>";
  echo "<td>".$row['straat']."</td>";
  echo "<td>".$row['postcode']."</td>";
  echo "<td>".$row['plaats']."</td>";
  echo "<td>".$row['geslacht']."</td>"; 
  echo "<td>".$row['geb_datum']."</td>";
  echo "</tr>";
}


?>

</table>

</body>
</html>