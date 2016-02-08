<?php
class Pizza
{
    private $length;
    private $width;
    private $height;
    private $weight;

    function setLength(new_length) {
        this->length = new_length;
    }

    function getLength() {
        return this->length;
    }

    function setWidth(new_width) {
        this->width = new_width;
    }

    function getWidth() {
        return this->width;
    }

    function setHeight(new_height) {
        this->height = new_height;
    }

    function getHeight() {
        return this->height;
    }

    function setWeight(new_weight) {
        this->weight = new_weight;
    }

    function getWeight() {
        return this->weight;
    }

    function __construct($length, $width, $height, $weight)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->weight = $weight;
    }

}

$pizza1 =  new Pizza(18, 18, 1, 2);
$pizza2 = new Pizza(24, 18, 2, 5);
$pizza3 = new Pizza(12, 10, 5, 4);

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

    ?>
  </ul>
</body>
</html>
