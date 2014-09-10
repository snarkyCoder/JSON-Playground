<?php
// fruits array
	$fruits = ['apple','pear','banana','watermelon','mango'];
	$jsonFruits =  json_encode($fruits);
// associative array  key:value for fruits and color
	$fruitColor= array(
		"apple"=>"red",
		"orange"=>"orange",
		"banana"=>"yellow",
		"mango"=>"orange"
		);
	$fruitColor = json_encode($fruitColor);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generando y Usando JSON</title>
</head>
<body>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="myjs.js"></script>
</body>
</html>