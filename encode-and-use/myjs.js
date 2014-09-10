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
		
// using jQuery to access each key and its value
	$.each( frutasObject, function( key, value ) {
		document.write( key + ": " + value + "<br/>");
	});