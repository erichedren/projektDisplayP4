<html>
	<body>
		<p> Turn the telldus device on or off </p>
		
		<div class="col-5">
			<a href= "?button_on" class="button_on"><i class="fa fa-play fa-fw"></i> On</a>
			
			<a href= "?button_off" class="button_off"><i class="fa fa-ban fa-fw"></i> Off</a>
		</div>
		<div class="col-7">
		
			<form action="">
				<input type="checkbox" name="dim" value="1">DimLevel 1<br>
				<input type="checkbox" name="dim" value="2">DimLevel 2 <br>
                <input type="checkbox" name="dim" value="3">DimLevel 3<br>
				<input type="checkbox" name="dim" value="4">DimLevel 4 <br>
                <input type="checkbox" name="dim" value="5">DimLevel 5 <br>
                <input type="checkbox" name="dim" value="6">DimLevel 6 <br>
                <input type="checkbox" name="dim" value="7">DimLevel 7 <br>
                <input type="checkbox" name="dim" value="8">DimLevel 8 <br>
                <input type="checkbox" name="dim" value="9">DimLevel 9 <br>
                <input type="checkbox" name="dim" value="10">DimLevel 10 <br>
                <input type="checkbox" name="dim" value="11">DimLevel 11 <br>
                <input type="checkbox" name="dim" value="12">DimLevel 12 <br>
                <input type="checkbox" name="dim" value="13">DimLevel 13 <br>
                <input type="checkbox" name="dim" value="14">DimLevel 14 <br>
                <input type="checkbox" name="dim" value="15">DimLevel 15 <br>
                <input type="checkbox" name="dim" value="16">DimLevel 16 <br>
                <input type="submit" name="formSubmit" value="Submit" />
			</form>
			
		</div>
		<?php 
		//Functions for the buttons functionallity
		include('button.php'); 
		?>
		
	</body>
</html>