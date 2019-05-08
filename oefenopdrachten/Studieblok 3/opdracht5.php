<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdracht 5</title>
  </head>
  <body>
    <?php
    class User {
      #Variabelen
      private $voornaam;
      private $achternaam;
      private $geboortedatum;
      #Functies
      public function __construct($voornaam,$achternaam,$geboortedatum) {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->geboortedatum = $geboortedatum;
      }
      public function getVoornaam() {
        return $this->voornaam; #Returnt $username van object
      }
      public function getAchternaam() {
        return $this->achternaam;
      }
      public function getGeboortedatum() {
        return $this->geboortedatum;
      }
    }
    $gegevens = new User("Jeffrey","Meijer","08-03-2002");
    echo "Voornaam:" . $gegevens->getVoornaam() . "<br/>";
    echo "Achternaam:" . $gegevens->getAchternaam() . "<br/>";
    echo "Geboortedatum:" . $gegevens->getGeboortedatum();
     ?>
  </body>
</html>
