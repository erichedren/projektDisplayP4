<?php
		namespace projektDisplay\View;
		use projektDisplay\controller\SessionManager;
	?>
<html>
 <fieldset>
    <legend>Display Status</legend>	
	<?php
		$controller = SessionManager::getController();
		$result = $controller->displayGetMessage();
		SessionManager::storeController($controller);
		echo "<p id ='displayTxt'> Status display:".$result."</p>";
	?>
</fieldset>


</html>