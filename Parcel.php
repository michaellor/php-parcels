<?php
class Pizza
{
    private $length;
    private $width;
    private $height;
    private $weight;
    private $volume;

    function setVolume(new_volume) {
        $this->volume = new_volume;
    }

    function getVolume(){
      return $this->volume;
    }

    function setLength(new_length) {
        $this->length = new_length;
    }

    function getLength() {
        return $this->length;
    }

    function setWidth(new_width) {
        $this->width = new_width;
    }

    function getWidth() {
        return $this->width;
    }

    function setHeight(new_height) {
        $this->height = new_height;
    }

    function getHeight() {
        return $this->height;
    }

    function setWeight(new_weight) {
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

    function volume($length, $width, $height)
    {
        $volume = (($this->length) * ($this->width) * ($this->height));
        return $volume;
    }

    function costToShip($volume, $weight)
    {
        $cost = ((($this->$volume) / 5) + (($this->weight) * .25));
    }

}

$pizza1 =  new Pizza(18, 18, 1, 2);//collect user input here instead of hardcoding in numbers


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


    $make_model = $car->getMakeModel();
    $price = $car->getPrice();
    echo "<li>$make_model</li>";
    echo "<ul>";
        echo "<li> $price </li>";
        echo "<li> $car->miles </li>";
    echo "</ul>";
    ?>


  </ul>
</body>
</html>
