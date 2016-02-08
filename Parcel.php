<?php
class Pizza
{
    private $length;
    private $width;
    private $height;
    private $weight;
    private $volume;

    function setVolume($new_volume) {
        $this->volume = new_volume;
    }

    function getVolume(){
      return $this->volume;
    }

    function setLength($new_length) {
        $this->length = new_length;
    }

    function getLength() {
        return $this->length;
    }

    function setWidth($new_width) {
        $this->width = new_width;
    }

    function getWidth() {
        return $this->width;
    }

    function setHeight($new_height) {
        $this->height = new_height;
    }

    function getHeight() {
        return $this->height;
    }

    function setWeight($new_weight) {
        $this->weight = new_weight;
    }

    function getWeight() {
        return $this->weight;
    }

    function __construct($length, $width, $height, $weight)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->weight = $weight;
    }

    function volume()
    {
        $volume = (($this->length) * ($this->width) * ($this->height));
        return $volume;
    }

    function costToShip()
    {
        $cost = ($this->volume() + $this->weight);
        return $cost;
    }

}

$pizza1 =  new Pizza($_GET["length"], $_GET["width"], $_GET["height"], $_GET["weight"]);
//collect user input here instead of hardcoding in numbers


?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
  <h1>Here is the cost of shipping your pizza</h1>
  <ul>
    <?php
      $length = $pizza1->getLength();
      $width = $pizza1->getWidth();
      $height = $pizza1->getHeight();
      $weight = $pizza1->getWeight();
      $volume = $pizza1->volume();
      $cost = $pizza1->costToShip();

      echo "<h3>Your Dimensions are</h3>";
      echo "<ul>";
      echo "<li>$length</li>";
      echo "<li>$width</li>";
      echo "<li>$height</li>";
      echo "<li>$weight</li>";
      echo "<h3>Your Pizza Box Volume is:</h3>";
      echo "<li>$volume</li>";
      echo "<h3>Your total cost is:</h3>";
      echo "<li>$cost</li>";
      echo "</ul>";

    ?>
  </ul>
</body>
</html>
