<?php 
	namespace projektDisplay\View;
    use projektDisplay\controller\SessionManager;
    use projektDisplay\model\Login;
    use projektDisplay\util\util;
	
	if (isset($_GET['button_on'])){
		button_on();
	}
	if (isset($_GET['button_off'])){
		button_off();
	}
	if (isset($_GET['formSubmit']) && !$_GET['start'] && !$_GET['stop']){
		echo "Dim-nivå med tidpunkt sparas!";
		sendMessage($value = $_GET['dim']);
	}
	if (isset($_GET['formSubmit']) && isset($_GET['start']) && isset($_GET['stop'])) {
		echo "Dim-nivå med start och slutdatum sparas!";
		sendMessageWithDate($Value = $_GET['dim'],$start = $_GET['start'], $stop = $_GET['stop']);
	}
	
	//Functions
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
	function sendMessage($V){
		$Value = $V * 15;
		echo "$Value";
		//$resOn = shell_exec("tdtool --dimlevel $Value  --dim 2");
		//sleep(1);
		
		if($V == 1){
			//00
			$resOn = shell_exec("tdtool --on 2");
			sleep(1);
			$resOn = shell_exec("tdtool --off 2");
		}
		elseif($V == 2){
			//01
			$resOn = shell_exec("tdtool --on 2");
			sleep(1);
			$resOn = shell_exec("tdtool --off 2");
			sleep(34);
			$resOn = shell_exec("tdtool --on 2");
			
			
			//Stäng av
			sleep(28);
			$resOn = shell_exec("tdtool --off 2");
		}
		elseif($V == 3){
			//10
			$resOn = shell_exec("tdtool --on 2");
			sleep(30);
			//$resOn = shell_exec("tdtool --on 2");
			sleep(2);
			$resOn = shell_exec("tdtool --off 2");
			
		}
		elseif($V == 4){
			//11
			$resOn = shell_exec("tdtool --on 2");
			sleep(20);
			//$resOn = shell_exec("tdtool --off 2");
			sleep(20);
			//$resOn = shell_exec("tdtool --on 2");
			
			
			//Stäng av
			sleep(22);
			$resOn = shell_exec("tdtool --off 2");
		}
		
		
		$controller = SessionManager::getController();
		$result = $controller->getMessage($V);
		echo "Result: ".$result;
		$controller->addMessage($result);
		SessionManager::storeController($controller);
		
		echo "DONE!";
		
	}
    function sendMessageWithDate($V,$start,$stop){
            $Value = $V * 15;
            
            echo "$Value";
            $resOn = shell_exec("tdtool --dimlevel $Value  --dim 2");
            sleep(1);
			$controller = SessionManager::getController();
			$result = $controller->getMessage($V);
			echo "Result: ".$result;
			$controller->addMessageWithDate($result, $start, $start);
			SessionManager::storeController($controller);
			
  } 
?>