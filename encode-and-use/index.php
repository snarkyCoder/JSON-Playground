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
	
	<script type="text/javascript">
//print array
		var frutasArray = <?php echo $jsonFruits; ?>;
	//print one
		document.write(frutasArray[0]);
			document.write('<br />');
	//print entire array
		document.write(frutasArray);
				document.write('<br />');

//convert string to object
		var frutasObject = JSON.parse('<?php echo $fruitColor; ?>');
	//accessing one
		document.write(frutasObject.apple);
				document.write('<br />');
		document.write(frutasObject['apple']);
				document.write('<br />');

	</script>
</body>
</html>