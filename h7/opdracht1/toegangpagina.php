<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  h2 ,a ,p{
    display: block;
    height: 20px;
    text-align: center;
  }

  p {
    margin: 10px;
  }

  </style>
</head>
<body>
<?php
echo "<h2>Welkom op de TOEGANG pagina</h1> <br>";
echo "<p>Hoi ". $_SESSION['naam'] . ". Je hebt de rol: ". $_SESSION['rol'] ."</h3><br>";
echo "<a href='admincheck.php'> Admin Pagina </a>";
echo "<a href='logout.php'> Loguit </a>";
?>
</body>
</html>

