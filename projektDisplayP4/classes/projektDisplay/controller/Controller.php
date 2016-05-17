<?php
	namespace projektDisplay\controller;
	use projektDisplay\model\Login;
    use projektDisplay\integration\LoginHandler;
	use projektDisplay\integration\DateMessageHandler;
    class Controller {
		private $loginHand;
		
		private $IP = "127.0.0.1";
		private $db_user = "root";
		private $db_password = "pass";
		private $db = "grupp8";
		
		public function __construct() {
			 $this->loginHand = new LoginHandler($this->IP, $this->db_user, $this->db_password, $this->db);
			 $this->dateMessageHand = new DateMessageHandler($this->IP, $this->db_user, $this->db_password, $this->db);
        }
		
        public function logIn(Login $login){
            return $this->loginHand->logIn($login);
        } 
		public function logOut() {
            $this->loginHand->logOut();
        }
		public function addMessage($message){
			$this->dateMessageHand->addMessage($message);
		}
		
		public function addMessageWithDate($message,$dateStart,$dateStop){
			$this->dateMessageHand->addMessageWithDate($message,$dateStart,$dateStop);
		}
		
		public function getMessage($V){
			return $this->dateMessageHand->getMessage($V);
		}
		public function displayGetMessage() {
			return $this->dateMessageHand->displayGetMessage();
		}
    }