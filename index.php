<?php
declare(strict_types=1);

namespace App;
require_once "vendor/autoload.php";

$shape = new Shape(10,10);
$shape->setName("Shape");
echo $shape->getProperties();

$rectangle = new Rectangle(20 , 20);
$rectangle->setName("Rectangle");
echo $rectangle->getProperties();

$circle = new Circle(10);
$circle->setName("Circle");
echo $circle->getProperties();

?>