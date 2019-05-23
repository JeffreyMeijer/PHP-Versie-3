<?php
class Tabel {
  private $rows;
  private $cells;


  public function __construct($rows,$cells){
    $this->rows = $rows;
    $this->cells = $cells;
  }
  public function getRows(){
    return $this->$rows;
  }
  public function getCells(){
    return $this->cells;
  }
  public function createTable(){
    $counter = 0;
    $numberarray = array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);
    shuffle($numberarray);
    echo "<form method='POST'>";
    echo "<table>";
    for($i = 0; $i < $this->rows; $i++){
      echo "<tr>";
      for($j = 0; $j < $this->cells; $j++){
        echo "<td><input type='button' id=$counter class='cellen' value=$numberarray[$counter]></input></td>\t";
        $counter++;
      }
      echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
  }
}
 ?>
