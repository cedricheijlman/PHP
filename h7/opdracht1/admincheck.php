<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geen toegang</title>
  <style>
  h1 , a{
    text-align: center;
    display: block;
  }
  

  </style>
</head>
<body>
<?php 
  if ($_SESSION['rol'] == "administrator" ) {
    header("Location: adminpagina.php");
  } else {
    echo "<h1>Onvoldoende rechten om de pagina te bezoeken</h1> <br>";
    echo "<a href='toegangpagina.php'>Terug naar toegang Pagina </a>";
  }
  
  ?>
</body>
</html>

