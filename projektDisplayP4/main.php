<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
	</head>
	<body>
		<div class="col-12">
			<div class = "main">
				<div class="col-4" id = "menu">
				<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Calender</a></li>
					<li><?php include projektDisplay_FRAGMENTS.'logged_in.php'; ?></li>
                </ul>
				</div>

			</div>
			<div class = "col-8" id="main-mid">
                <p> Turn the telldus device on or off </p>
				<?php include 'button.php'; ?>
			</div>
	</body>
</html>