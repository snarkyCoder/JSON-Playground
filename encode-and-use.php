

<?php
	$fruits = ['apple','pear','banana','watermelon','mango'];
	$jsonFruits =  json_encode($fruits);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>A Document</title>
</head>
<body>
	
	<script>
			var jsonfrutas = (<?php echo $jsonFruits; ?>);
			alert(jsonfrutas);
	</script>
</body>

</html>