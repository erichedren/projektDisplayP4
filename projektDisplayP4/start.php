<?php 
	namespace projektDisplay\View;
    use projektDisplay\controller\SessionManager;
?>
<html>
	<body>
		<p> Turn the telldus device on or off </p>
		
		<div class="col-12">
			<a href= "?button_on" class="button_on"><i class="fa fa-play fa-fw"></i> On</a>
			
			<a href= "?button_off" class="button_off"><i class="fa fa-ban fa-fw"></i> Off</a>
			<br><br>
			
			<fieldset>
			<legend>Messages:</legend>
				<form action="">
				<?php
				
					//Print out all checBoxes with the right messages
					
					$controller = SessionManager::getController();
					for($i = 1; $i<5; $i++){
						$message = $controller->getMessage($i);
						echo "<input type='radio' name='dim' value=".$i." required>".$message."<br>";
					}
					SessionManager::storeController($controller);
				?>
				<br>
					<input type="date" name="start">Start date <br>
					<input type="date" name="stop">Stop date <br><br>
					<input type="submit" name="formSubmit" value="Submit" />
				</form>
			</fieldset>			
		</div>
		<?php 
		//Functions for the buttons functionallity
		include('button.php'); 
		?>
		
	</body>
</html>
