<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);
?>
<?php include('Text.class.php'); ?>
<?php include('Name.class.php'); ?>
<?php include('Factorial.class.php'); ?>
<?php include('Order.class.php'); ?>
<?php include('Date.class.php'); ?>
<?php include('Calculator.class.php'); ?>

<?php

$text = new Text();
$text->showText();

$human = new Name();
$human->showName('Ania');

$factor = new Factorial();
$factor->outputF();
