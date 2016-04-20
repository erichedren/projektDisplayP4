<?php
	namespace projektDisplay\controller;
	use projektDisplay\model\Login;
    use projektDisplay\integration\LoginHandler;
    class Controller {
		private $loginHand;
		public function __construct() {
			 $this->loginHand = new LoginHandler();
        }
		
        public function logIn(Login $login){
            return $this->loginHand->logIn($login);
        } 
    }