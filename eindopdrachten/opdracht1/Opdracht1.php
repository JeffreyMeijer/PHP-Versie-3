<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eindopdracht 1</title>
  </head>
  <body>
    <?php
    spl_autoload_register(function ($className){
      include_once $className . ".php";
    });
    $huis = new Huis("Beethovenplaats",6,"Groningen");
    $huis->setKamers(4);
    $huis->setToiletten(2);
    $huis->setVerwarming(true);
    $huis->setSoortverwarming("Electrisch");
    $huis->setVierkantemeter(120);
    $huis->setWOZ(150000);
    $huis->setBelasting($huis->bepaalBelasting($huis->getWOZ(),$huis->getKamers(),$huis->getPlaats()));
    echo "Huis aan " . $huis->getStraat() . " " . $huis->getHuisnummer() . " in " . $huis->getPlaats() . "<br/>";
    echo "Kamers: " . $huis->getKamers() . "<br/>";
    echo "Toiletten: " . $huis->getToiletten() . "<br/>";
    echo "Heeft verwarming?: " . $huis->getVerwarming() . "<br/>";
    echo "Soort verwarming: " . $huis->getSoortverwarming() . "<br/>";
    echo "Vierkante meter: " . $huis->getVierkantemeter() . "<br/>";
    echo "WOZ: " . $huis->getWOZ() . "<br/>";
    echo "Belasting van het huis is " . $huis->getBelasting() . " Euro";
     ?>
  </body>
</html>
