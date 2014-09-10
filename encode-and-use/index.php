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
	<script type="text/javascript">
//print array
		var frutasArray = <?php echo $jsonFruits; ?>;
	//print one
		document.write(frutasArray[0] + "<br/>");
	//print entire array
		document.write(frutasArray+"<br/>");

//convert string to object
		var frutasObject = JSON.parse('<?php echo $fruitColor; ?>');
	//accessing one
		document.write(frutasObject.apple +"<br/>");

		document.write(frutasObject['apple']+"<br/>");
		
	// 
	$.each( frutasObject, function( key, value ) {
		document.write( key + ": " + value + "<br/>");
	});

	</script>
</body>
</html>