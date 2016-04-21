<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	</head>
	<body>
		<div class="col-12">
			<div class = "main">
				<div class="col-2">
				<ul id="menu">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-cogs fa-fw"></i> Settings</a></li>
                    <li><a href="#"><i class="fa fa-calendar fa-fw"></i> Calender</a></li>
					<li><?php include projektDisplay_FRAGMENTS.'logged_in.php'; ?></li>
                </ul>
				</div>

			</div>
			<div class = "col-10" id="main-mid">
                <p> Turn the telldus device on or off </p>
				<?php include 'button.php'; ?>
			</div>
        </div>    
	</body>
</html>