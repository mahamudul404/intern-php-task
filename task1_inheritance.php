<?php

class Shape
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

class Circle extends Shape
{

  private $radius;
  public function __construct($radius)
  {
    parent::__construct('Circle');
    $this->radius = $radius;
  }
  public function calculateArea()
  {
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle extends Shape
{
  private $length;
  private $width;

  public function __construct($length, $width)
  {
    parent::__construct('Rectangle');
    $this->length = $length;
    $this->width = $width;
  }

  public function calculateArea()
  {
    return $this->length * $this->width;
  }
}

$circle = new Circle(5);
echo "Area of Circle: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(8, 12);
echo "Area of Rectangle: " . $rectangle->calculateArea();
