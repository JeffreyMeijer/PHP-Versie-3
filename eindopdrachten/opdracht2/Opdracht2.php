<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css.css"></link>
    <meta charset="utf-8">
    <title>Memory</title>
  </head>
  <body>
    <?php
    spl_autoload_register(function ($className){
      include_once $className . ".php";
    });
    $Table = new Tabel(4,4);
    $Table->createTable();
     ?>
  </body>
  <script src="script.js"></script>
</html>
