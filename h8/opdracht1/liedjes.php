<?php

class Liedje {
  private $titel;
  private $artiest;

  function __construct($t, $a)
  {
    $this->titel = $t;
    $this->artiest = $a;
  }

  public function getTitel(){
		return $this->titel;
	}

	public function setTitel($titel){
		$this->titel = $titel;
	}

	public function getArtiest(){
		return $this->artiest;
	}

	public function setArtiest($artiest){
		$this->artiest = $artiest;
	}
}