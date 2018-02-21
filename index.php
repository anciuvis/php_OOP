<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);
?>
<?php include('Point.class.php'); ?>
<?php include('Shape.class.php'); ?>
<?php include('Ellipse.class.php'); ?>
<?php include('Circle.class.php'); ?>
<?php include('Triangle.class.php'); ?>
<?php include('Rectangle.class.php'); ?>
<?php include('Square.class.php'); ?>
<?php include('SvgRenderer.class.php'); ?>
<?php include('Program.class.php'); ?>

<?php
	$program = new Program();
	$renderer = new SvgRenderer();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SVG painter</title>
	</head>
	<body>
		<?php $program->run($renderer); ?>
		<!-- senas metodas, rankomis SVG sukurti atskirai kiekviena elementa: -->
		<!-- <svg width="900" height="500">
			<rect x="350" y="200" width="80" height="80" style="fill:rgba(0, 255, 255, 0.7);" />
			<rect x="50" y="50" width="150" height="80" style="fill:rgba(179, 0, 0, 0.7);" />
			<circle cx="250" cy="220" r="150" style="fill:rgba(255, 255, 0, 0.4);" />
			<ellipse cx="500" cy="200" rx="50" ry="100" style="fill:rgba(0, 102, 0, 0.7);" />
			<polygon points="60,100 200,300 60,300" style="fill:rgba(153, 0, 153, 0.7);" />
		</svg> -->
	</body>
</html>
