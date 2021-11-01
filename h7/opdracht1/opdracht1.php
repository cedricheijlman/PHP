<?php
$toegang = false;
require 'credentials.php';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



if (isset($_POST['button'])) {
  $naam = $_POST['naam'];
  $wachtwoord = $_POST['wachtwoord'];
 
  $stmt = $db->prepare('SELECT * FROM gebruikers2');
  $stmt->execute();
  while($a = $stmt->fetch()) {
      if ($naam == $a['naam'] and $wachtwoord == $a['wachtwoord']) {
        $toegang = true;
        session_start();
        $_SESSION['naam'] = $naam;
        $_SESSION['wachtwoord'] = $wachtwoord;
        $_SESSION['rol'] = $a['rol'];
        header("location: toegangpagina.php");
        break;
      } 
      
  }
  
if ($toegang == false) {
  header("location: geentoegang.php");
}
  

}
  


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  form {
   text-align: center;
  }

  input {
    margin-bottom: 10px;
  }

  label {
    text-align: left;
   display: inline-block;
   width: 100px;
  }
  </style>
</head>
<body> 
  
  <form  method="POST"   action="opdracht1.php">
  <h1>Inloggen</h1>
  <label for="">Naam</label>   <input name="naam" type="text"> <br>
  <label for="">Wachtwoord</label>  <input name="wachtwoord" type="password"> <br>
    <input type="submit" name="button" >
  </form>
 
</body>
</html>