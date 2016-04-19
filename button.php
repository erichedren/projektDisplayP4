<html>
	<head>
		 <link rel="stylesheet" type="text/css" href="../css/styles.css">
	</head>
	<body>
		<div class="col-3">
			<a href= '?test()' class="button_on">Test</a>
		</div>
		<div class="col-3">
			<a href= "button_off();" class="button_off">Off</a>
		</div>
	</body>
</html>
<?php 

	function button_on() {
		$divices = tdGetNumberOfDevices();
		printf("Devices: %d\n" + $devices);
		
		$allMethods = TELLDUS_TURNON;
		
		for ($i = 0; $i < $devices; ++$i) {
				
				$allMethods = TELLDUS_TURNON;
				$id = tdGetDeviceId($i);
				$name = utf8_encode(tdGetName($id));
				printf("%s - %s\n", $id, $name);
				
				$methods = tdMethods($id, $allMethods);
				if($methods & TELLDUS_TURNON) {
					echo " * TurnOn\n";
					tdTurnOn( $id );
						sleep(1);
				}		
		}
	}
	function button_off() {
		$divices = tdGetNumberOfDevices();
		printf("Devices: %d\n" + $devices);
		
		$allMethods = TELLDUS_TURNOFF;
		
		for ($i = 0; $i < $devices; ++$i) {
			
				$id = tdGetDeviceId($i);
				$name = utf8_encode(tdGetName($id));
				printf("%s - %s\n", $id, $name);
				
				$methods = tdMethods($id, $allMethods);
				if($methods & TELLDUS_TURNOFF) {
					echo " * TurnOf\n";
					tdTurnOn( $id );
						sleep(1);
				}		
		}
	}
	function test() {
		echo "Din mamma";
	}

?>