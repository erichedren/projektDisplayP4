<?php
?>
<html>
	<head>
	</head>
	<body>
		<div id="loged_in">
			<p id="txtLoggedIn">Logged in as: <?php echo $_SESSION['username']; ?> </p>
			<form action="log_out.php" method='post'>
			<center><input type='submit' name="logOut" value="Log out"></center>
			</form>
		</div>
	</body>
</html>