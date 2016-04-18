<html>
	<head>
		 <link rel="stylesheet" type="text/css" href="../css/styles.css">
	</head>
	<body>
		<div class="col-12">
			<div class = "button" id="on_button">
				<p class ="button"> On </p>
			</div>
		</div>
	</body>
</html>
<?php 
	if(!extension_loaded('telldus') {
		dl('telldus' . PHP_SHL_SUFFIX);
	}
	
	$divices = tdGetNumberOfDevices();
	printf("Devices")