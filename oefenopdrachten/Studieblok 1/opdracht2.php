<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class User {
      #Variabelen
      public $voornaam;
      public $achternaam;
      public $geboortedatum;
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
    $jeffrey = new User; #Maakt een nieuwe User object aan
    $jeffrey->setVoornaam('Jeffrey'); #Zet de object's voornaam Variable naar 'Jeffrey'
    $jeffrey->setAchternaam('Meijer'); #Zet de object's achternaam Variable naar 'Meijer'
    $jeffrey->setGeboortedatum("08-03-2002");
    echo "Voornaam:" . $jeffrey->getVoornaam() . "<br/>" .
         "Achternaam:" . $jeffrey->getAchternaam() . "<br/>" .
         "Geboortedatum:" . $jeffrey->getGeboortedatum() . "<br/>";
     ?>
  </body>
</html>
