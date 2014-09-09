<?php
//array de frutas
	$fruits = ['apple','pear','banana','watermelon','mango'];
	$jsonFruits =  json_encode($fruits);
//associative array de fruta y color
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
	
	<script>
//imprimiendo como array
		var frutasArray = <?php echo $jsonFruits; ?>;
	//accesando solo uno
		document.write(frutasArray[0]);
			document.write('<br />');
	//imprimiendo todo el array
		document.write(frutasArray);
				document.write('<br />');

//convert string to object
		var frutasObject = JSON.parse('<?php echo $fruitColor; ?>');
	//accessando solo uno 
		document.write(frutasObject.apple);
				document.write('<br />');
		document.write(frutasObject['apple']);
				document.write('<br />');

	//imprimiendo todo el objeto
	</script>
</body>

</html>