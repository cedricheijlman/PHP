<?php

 class Auto {
  
  private $merk;
  private $prijs;
  private $image_url;
  private $type;

  function __construct($merk, $prijs, $type, $image_url)
  {
    $this->merk = $merk;
    $this->prijs = $prijs;
    $this->type = $type;
    $this->image_url = $image_url;
  }

  function getMerk() {
    return $this->merk;
  }

  function getType() {
    return $this->type;
  }


  function getPrijs() {
    return $this->prijs;
  }

  function getImageUrl() {
    return $this-> image_url;
  }

  function setMerk($merk) {
    $this->merk = $merk;
  }

  function setPrijs($prijs) {
    $this->prijs = $prijs;
  }

  function geefGas() {
    echo "Vroem vroem";
  }

  function rem() {
    echo "Remmen..";
  }

}




?>