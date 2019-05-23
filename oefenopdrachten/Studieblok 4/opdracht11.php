<?php
//Het is handig als je een klasse wilt waar je geen instantie van hoeft te maken.
//Ook is het handig als je bijvoorbeeld wil bijhouden hoeveel instanties je van een object hebt.
//Voorbeeld
class Counter {
  private static $_count = 0;

  public function __construct() {
    self::$_count++;
  }
  public static function getCount(){
    return self::$_count;
  }
}

$x = new Counter;
$y = new Counter;
$z = new Counter;
echo "Er zijn in totaal " . Counter::getCount() . " Objecten gemaakt met de class Counter";

 ?>
