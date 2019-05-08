<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdracht 1</title>
  </head>
  <body>
    <?php
    class User {
      #Variabelen
      protected $voornaam;
      private $achternaam;
      private $geboortedatum;
      #Functies
      public function setVoornaam($name) {
        $this->voornaam = $name; #zet $username naar argument
      }
      public function getVoornaam() {
        return $this->voornaam; #Returnt $username van object
      }
      public function setAchternaam($name) {
        $this->achternaam = $name;
      }
      public function getAchternaam() {
        return $this->achternaam;
      }
      public function setGeboortedatum($datum) {
        $this->geboortedatum = $datum;
      }
      public function getGeboortedatum() {
        return $this->geboortedatum;
      }
    }
     ?>
  </body>
</html>
