<?php



class Autooverzicht {
   
  private $autoos;

  function __construct()
  {
    $this->autoos = [
      new Auto('Audi', 102500.00, "a","//unsplash.it/200/100"),
      new Auto('Ferarri', 99500.00,"b","//unsplash.it/199/100" ),
      new Auto('Fiat', 10500.00,"c", "//unsplash.it/200/99")
    ];
  }
   
  function getAutoLijst() {
    return $this->autoos;
  }

  function voegAutoToe($merk, $prijs, $type, $image_url) {
     $newAuto = new Auto($merk,$prijs,$type, $image_url);
     $this->autoos[] = $newAuto;
  }

  function getGefilterdeLijst($merk, $minPrijs, $maxPrijs, $type) {
    $gefilterdeLijst = [];
    foreach($this->autoos as $auto) {
      if ($auto->getPrijs() > $minPrijs and $auto->getPrijs() <= $maxPrijs ) {
        if ($merk == "Alle" && $type == "Alle") {
        $gefilterdeLijst[] = $auto;
        } else if ($merk == "Alle" && $type == $auto->getType()) {
        $gefilterdeLijst[] = $auto;
        } else if ($merk == $auto->getMerk() && $type == "Alle") {
        $gefilterdeLijst[] = $auto;
        } else if ($merk == $auto->getMerk() && $type == $auto->getType()){
        $gefilterdeLijst[] = $auto;
        }
      }
    }
    return $gefilterdeLijst;
  }

}