<!-- GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto -->
<?php

class Square {
  public $lato;

  public function __construct($lato) {
    $this-> lato = $lato;
  }

  public function per() {
    return 4 * $this-> lato;
  }

  public function area() {
    return $this-> lato * $this-> lato;
  }

  public function getAreaPer() {
    return "Lato: " . $this-> lato . '<br>'
          . "Perimetro: " . $this-> per() . '<br>'
          . "Area: " . $this-> area() . '<br>';
  }

  public function __toString() {
    return "<b>Square</b> <br>" . $this-> getAreaPer();
  }
}


class Cube extends Square {

  public function __construct($lato) {
    parent::__construct($lato);
  }

  public function vol() {
    return $this-> area() * $this-> lato;
  }

  public function sur() {
    return 6 * $this-> area();
  }

  public function __toString() {
    return "<b>Cube</b> <br>"
          . "Lato: " . $this-> lato . '<br>'
          . "Volume: " . $this-> vol() . '<br>'
          . "Superficie: " . $this-> sur() . '<br>';
  }

}

$square1 = new Square(5);
$square2 = new Square(10);

$cube1 = new Cube(2);
$cube2 = new Cube(4);

// $cube2-> lato = 3;



echo $square1 . '<br>';
echo $square2 . '<br>';

echo $cube1 . '<br>';
echo $cube2 . '<br>';
