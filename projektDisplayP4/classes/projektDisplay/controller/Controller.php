<?php
	namespace projektDisplay\controller;
	use projektDisplay\model\Login;
    use projektDisplay\integration\LoginHandler;
	use projektDisplay\integration\DateMessageHandler;
    class Controller {
		private $loginHand;
		public function __construct() {
			 $this->loginHand = new LoginHandler();
			 $this->dateMessageHand = new DateMessageHandler();
        }
		
        public function logIn(Login $login){
            return $this->loginHand->logIn($login);
        } 
		public function logOut() {
            $this->loginHand->logOut();
        }
		public function addMessage($message,$dateStart,$dateStop){
			$this->dateMessageHand->addMessage($message,$dateStart,$dateStop);
		}
    }