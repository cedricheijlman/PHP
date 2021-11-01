<?php 
include_once('Programma.php');
include_once('liedjes.php');

$programmaEen = new Programma();
$programmaEen->setNaam("Eerste Programma");
$programmaEen->setOmschrijving("Test Test Omschrijving");


foreach($programmaEen->getProgramma() as $p) {
  echo $p. "<br>";
}


$nieuwlied = new liedje("Titell", "Rolling Stones");


$programmaEen->voegLiedjeToe($nieuwlied);
foreach($programmaEen->getLiedjes() as $liedje) {
echo $liedje->getTitel()." - ".$liedje->getArtiest(). "<br>";
}

?>