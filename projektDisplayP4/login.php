<?php
    namespace projektDisplay\View;
    use projektDisplay\controller\SessionManager;
    use projektDisplay\model\Login;
    use projektDisplay\util\util;
    
    require_once 'classes/projektDisplay/util/util.php';
    util::initRequest();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = new Login($username,$password);
    $controller = SessionManager::getController();
    $row = $controller->logIn($login);
    SessionManager::storeController($controller);
    if($row) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
    else {
        $_SESSION['logFlag'] = true;
        header ("Location: index.php");
    }