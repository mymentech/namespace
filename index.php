<?php
namespace Animals;
include_once "vendor/autoload.php";

$cat = new Cat();
$cat->greet();

$dog = new Dog();
$dog->greet();

$test = new Test\Test();
$test->greet();