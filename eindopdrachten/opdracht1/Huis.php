<?php
class Huis {
  private $aantalKamers;
  private $aantalToiletten;
  private $verwarming;
  private $soortVerwarming;
  private $straatnaam;
  private $huisnummer;
  private $plaats;
  private $vierkantemeter;
  private $woz;
  private $belasting;

  public function __construct($straatnaam,$huisnummer,$plaats){
    $this->straatnaam = $straatnaam;
    $this->huisnummer = $huisnummer;
    $this->plaats = $plaats;
  }
  //Setters
  public function setKamers($aantalKamers){
    $this->aantalKamers = $aantalKamers;
  }
  public function setToiletten($aantaltoiletten){
    $this->aantalToiletten = $aantaltoiletten;
  }
  public function setVerwarming($heeftVerwarming){
    $this->verwarming = $heeftVerwarming;
  }
  public function setSoortverwarming($soortVerwarming){
    $this->soortVerwarming = $soortVerwarming;
  }
  public function setVierkantemeter($vierkantemeter){
    $this->vierkantemeter = $vierkantemeter;
  }
  public function setWOZ($woz){
    $this->woz = $woz;
  }
  public function setBelasting($belasting){
    $this->belasting = $belasting;
  }
  //Getters
  public function getStraat(){
    return $this->straatnaam;
  }
  public function getHuisnummer(){
    return $this->huisnummer;
  }
  public function getKamers(){
    return $this->aantalKamers;
  }
  public function getToiletten(){
    return $this->aantalToiletten;
  }
  public function getVerwarming(){
    return $this->verwarming;
  }
  public function getSoortverwarming(){
    return $this->soortVerwarming;
  }
  public function getVierkantemeter(){
    return $this->vierkantemeter;
  }
  public function getWOZ(){
    return $this->woz;
  }
  public function getPlaats(){
    return $this->plaats;
  }
  public function getBelasting(){
    return $this->belasting;
  }


  public function bepaalBelasting($woz,$kamers,$plaats){
    $belasting = 0;
    //WOZ
    if($woz <= 100000){
      $belasting += 600;
    }
    if($woz > 100000 && $woz <= 200000){
      $belasting += 2000;
    }
    if($woz > 200000){
      $belasting += 6000;
    }

    //Kamers
    if($kamers == 1){
      $belasting += 100;
    }
    if($kamers == 2){
      $belasting += 300;
    }
    if($kamers >= 3){
      $belasting += 800;
    }


    //Plaats
    if($plaats == "Amsterdam" || $plaats == "Rotterdam" || $plaats == "Groningen"){
      $belasting += 1000;
    }
    return $belasting;
  }
}
 ?>
