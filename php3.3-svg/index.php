<?php

require_once 'Paint.class.php';
require_once 'Rectangle.class.php';
require_once 'Circle.class.php';
require_once 'Triangle.class.php';
require_once 'Trapezium.class.php';
require_once 'Line.class.php';
require_once 'Sun.class.php';

$rect = new Rectangle("100%", "100%", "royalblue");
$circle = new Circle(150, 100, 70, "green");
$triangle = new Triangle([400, 200], [250, 300], [350, 80], 'purple');
$trapezium = new Trapezium([0, 300], 200, 500, 150);
$sun = new Sun([650, 120], 25);

$shapes = [$rect, $sun, $trapezium, $triangle, $circle];

$paint = new Paint(800, 600, $shapes);
$paint->draw();
