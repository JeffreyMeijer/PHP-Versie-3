<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    spl_autoload_register(function ($className){
      include_once $className . ".php";
    });
    $jeffrey = new User;
    $jeffrey->setVoornaam("Jeffrey");
    echo $jeffrey->getVoornaam();
     ?>
  </body>
</html>
