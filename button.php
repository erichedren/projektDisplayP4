<html>
	<head>
		 <link rel="stylesheet" type="text/css" href="../css/styles.css">
	</head>
	<body>
		<div class="col-3">
			<a href= "?button_on" class="button_on">On</a>
		</div>
		<div class="col-3">
			<a href= "?button_off" class="button_off">Off</a>
		</div>
	</body>
</html>
<?php 
	if (isset($_GET['button_on'])){
		button_on();
	}
	if (isset($_GET['button_off'])){
		button_off();
	}
	function button_on() {
			echo " * TurnedOn\n";
			$resOn = shell_exec("tdtool --on 2");
				sleep(1);
			$resOn = shell_exec("tdtool --on 2");
				sleep(1);
	}
	function button_off() {
			echo " * TurnedOf\n";
			$resOf = shell_exec("tdtool --off 2");
				sleep(1);
			$resOf = shell_exec("tdtool --off 2");
				sleep(1);		
	}
?>