<?php

if(isset($_POST['email']) && isset($_POST['wachtwoord'])) {
if ($_POST['email'] == 'piet@worldonline.nl' and $_POST['wachtwoord'] == 'doetje123' or 
$_POST['email'] == 'klaas@carpets.nl' and $_POST['wachtwoord'] == 'snoepje777' or
$_POST['email'] == 'truushendriks@wegweg.nl' and $_POST['wachtwoord'] == 'arkiearkie201'  ) {
  header("Location: toegang.php");
} else {

 header("Location: geentoegang.php");
 
}
}
 


?>