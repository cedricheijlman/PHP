<?php

require 'connection.php';



if (isset($_POST['email']) and isset($_POST['wachtwoord'])) {
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];
$toegang = false;
$stmt = $db->prepare('SELECT * FROM gebruikers');
$stmt->execute();
while($a = $stmt->fetch()) {
    if ($email == $a['email'] and $wachtwoord == $a['wachtwoord']) {
      $toegang = true;
    } 
}

if ($toegang == true) {
 header("Location: weltoegang.php");
} else {
  header("Location: geentoegang.php");
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
</head>
<body>
  


<form action="opdracht02.php" method="POST">
 email <input type="text" name="email">
 wachtwoord <input type="text" name="wachtwoord">
 <input type="submit" name="button">
</form>
</body>
</html>