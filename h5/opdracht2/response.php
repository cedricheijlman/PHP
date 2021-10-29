<?php
 



 if ($_POST['naam'] == "") {
   echo "Je moet nog een naam invullen! <br>";
   echo "<a href='form.html'> Terug naar het formulier</a>";
 }

 if ($_POST['adres'] == "") {
  echo "Je moet nog een adres invullen! <br>";
  echo "<a href='form.html'> Terug naar het formulier</a>";
}

if ($_POST['email'] == "") {
  echo "Je moet nog een email invullen! <br>";
  echo "<a href='form.html'> Terug naar het formulier</a>";
}

if ($_POST['wachtwoord'] == "") {
  echo "Je moet nog een wachtwoord invullen! <br>"; 
  echo "<a href='form.html'> Terug naar het formulier</a>";
}

?>