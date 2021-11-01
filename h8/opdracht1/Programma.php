<?php


class Programma {
private $naam = "";
private $omschrijving = "";
private $liedjes = array();

public function voegLiedjeToe($liedje) {
  $this->liedjes[] = $liedje;
}

public function getLiedjes() {
  return $this->liedjes;
}


/** 
* geeft programma informatie terug
*/
public function getProgramma() {
  return array("naam" => $this->naam, "omschrijving" => $this->omschrijving);
}

/* set naam van programma */
public function setNaam($n) {
  return $this->naam = $n;
}

/* set omschrijving van programma */
function setOmschrijving($omschrijving) {
  return $this->omschrijving = $omschrijving;
}
}


?>