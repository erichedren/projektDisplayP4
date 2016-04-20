<?php
?>
<html>
	<head>
	</head>
	<body>
		<div id="loged_in">
			<p id="txtLoggedIn">Logged in as: <?php echo $_SESSION['username']; ?> </p>
			<form action="log_out.php" method='post'>
			<input type='submit' name="logOut" value="Log out">
			</form>
		</div>
	</body>
</html>