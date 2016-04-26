
<?php 
    $controller = SessionManager::getController();
    sessionManager::storeController($controller);
	if (isset($_GET['button_on'])){
		button_on();
	}
	if (isset($_GET['button_off'])){
		button_off();
	}
	if (isset($_GET['formSubmit'])){
		dim($Value = $_GET['dim'],$start = $_GET['start'], $stop = $_GET['stop']);
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
    function dim($V,$start,$stop){
            $Value = $V * 15;
            
            echo "$Value";
            $resOn = shell_exec("tdtool --dimlevel $Value  --dim 2");
            sleep(1);
			$controller->addMessage($V,$start,$stop);
			
  }
?>