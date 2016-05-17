<?php

    namespace projektDisplay\View;
    use projektDisplay\controller\SessionManager;
    use projektDisplay\util\util;
    
    require_once 'classes/projektDisplay/util/util.php';
    util::initRequest();
    
    $controller = SessionManager::getController();
    $row = $controller->logOut();
    SessionManager::storeController($controller);