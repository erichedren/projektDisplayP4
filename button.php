<html>
	<head>
		 <link rel="stylesheet" type="text/css" href="../css/styles.css">
	</head>
	<body>
		<div class="col-12">
			<div class = "button" id="on_button">
				<input type="submit" name="On" value="On" onclick="button_on()" />
			</div>
		</div>
	</body>
</html>
<?php 
	function button_on() {
		if(!extension_loaded('telldus')
			dl('telldus' . PHP_SHL_SUFFIX);
		
		$divices = tdGetNumberOfDevices();
		printf("Devices: %d\n" + $devices);
		
		for ($i = 0; $i < $devices; ++$i) {
			
				$id = tdGetDeviceId($i);
				$name = utf8_encode(tdGetName($id));
				printf("%s - %s\n", $id, $name);
				
				$methods = tdMethods($id, $allMethods);
				if($methods & TELLDUS_TURN_ON) {
					echo " * TurnOn\n";
					tdTurnOn( $id );
						sleep(1);
				}		
		}
	}
?>