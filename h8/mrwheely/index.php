<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<form action="index.php" method="get">
  <label for="merkNaam">Merk: </label>
  <select name="merkNaam" id="merkNaam">
    <option value="Alle">Alle</option>
    <option value="Ferarri">Ferarri</option>
    <option value="Opel">Opel</option>
    <option value="Fiat">Fiat</option>
    <option value="Audi">Audi</option>
  </select>
  <label for="type">Type: </label>
  <select name="type" id="type">
    
    <option value="Alle">Alle</option>
    <option value="a">A</option>
    <option value="b">B</option>
    <option value="c">C</option>
    <option value="d">D</option>
  </select>
  <label for="minPrijs">Minimale Prijs:</label>
  <input type="text" id="minPrijs" name="minPrijs">
  <label for="maxPrijs">Maximale Prijs:</label>
  <input type="text" id="maxPrijs" name="maxPrijs" >
  <input type="submit">
</form>

<?php

require_once('Auto.php');
require_once('Autooverzicht.php');

$minPrijs = isset($_GET['minPrijs']) && !empty($_GET['minPrijs']) ? $_GET['minPrijs'] : 0;
$maxPrijs = isset($_GET['maxPrijs']) && !empty($_GET['maxPrijs']) ? $_GET['maxPrijs'] : 99999999;
$merk = isset($_GET['merkNaam']) ? $_GET['merkNaam'] : "Alle";
$type = isset($_GET['type']) ? $_GET['type'] : "Alle";

$autoos = new Autooverzicht();
$autoos->voegAutoToe('Opel', 300,"d", '//unsplash.it/198/98');

foreach($autoos->getGefilterdeLijst($merk, $minPrijs, $maxPrijs, $type ) as $auto) {
 
  echo $auto->getMerk()." - ". $auto->getPrijs()."<br>";
  echo '<img src="'.$auto->getImageUrl().'" >'."<br>"; 
  
}

?>
</body>
</html>