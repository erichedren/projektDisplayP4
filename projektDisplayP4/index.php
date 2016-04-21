<?php
    namespace projektDisplay\View;
	
    use projektDisplay\util\util;
    use projektDisplay\controller\SessionManager;
    require_once 'classes/projektDisplay/util/util.php';
    util::initRequest();
	$controller = SessionManager::getController();
    sessionManager::storeController($controller);
	?>
<html>
	<head>
		<title>Display - Grupp 8</title>
		<link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
	</head>
	<body>
		<div class = "col-12">
			<?php include 'check_login.php'; ?>
		</div>
	</body>
</html>

