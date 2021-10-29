<?php

if(inlogCheck($_POST['email'],$_POST['wachtwoord']) == true) {
  header("Location: toegang.php");
} else {
  header("Location: geentoegang.php");
}


function inlogCheck($email, $wachtwoord) {
  
    if ($email == 'piet@worldonline.nl' and $wachtwoord == 'doetje123' or 
    $email == 'klaas@carpets.nl' and $wachtwoord == 'snoepje777' or
    $email == 'truushendriks@wegweg.nl' and $wachtwoord == 'arkiearkie201'  ) {
      return true;
    } else {
      return false;
    }
    
     
}


?>