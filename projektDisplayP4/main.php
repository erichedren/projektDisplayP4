<html>
<head>
		<link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	</head>
<body>
<div class="wrapper" >
	<!-- Header -->
	<div class="col-12">
	<?php include('resources\fragments\header.php'); ?>
	</div>
	
	<!-- Menu -->
	<div class="col-2 menu">
		<?php include('resources\fragments\menu.php'); ?>
	</div>
	
	<!-- Main-content -->
	<div class="col-7">
	<?php 
	
	$page = $_GET['page'];
	
	if($page == ""){
		include('start.php'); 
	}
	else {
		include($page.".php");
	}
	?>
	</div>
	
	<!-- Statusbar -->
	<div class="col-3 status">
	Status här
	</div>
	
	<!-- Footer -->
	<div class="col-12">
	<?php include('resources\fragments\footer.php'); ?>
	</div>
</div>
</body>
</html>