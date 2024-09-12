<?php

abstract class Animal
{
  abstract public function makeSound();
}

class Dog extends Animal
{
  public function makeSound()
  {
    return "Woof!";
  }
}

class Cat extends Animal
{
  public function makeSound()
  {
    return "Meow!";
  }
}

$dog = new Dog();
echo "Dog says: " . $dog->makeSound() . "<br>";

$cat = new Cat();
echo "Cat says: " . $cat->makeSound() . "<br>";
