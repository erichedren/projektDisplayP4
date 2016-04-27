<?php
    namespace projektDisplay\integration;
    use projektDisplay\model\Login;
    
    class LoginHandler {
        
        private $IP;
		private $db_user;
		private $db_password;
		private $db;
		private $db_path;
		
		public function __construct(){
			$this->IP="127.0.0.1";
			$this->db_user = "root";
			$this->db_password = "grupp8";
			$this->db = "grupp8";
		}
        public function logIn(Login $login) {
            $userName = $login->getUsername();
            $password = $login->getPassword();
			
			$link = mysqli_connect($this->IP, $this->db_user, $this->db_password, $this->db) or die(mysql_error);
			$query = ("SELECT*FROM users WHERE username='".$userName."' AND password = '".$password."'");
			$result = mysqli_num_rows(mysqli_query($link, $query));
			
            if($result == 1) {
                return true;
            }
            else {
                return false;
            }
			mysqli_close($link);
        }
        public function logOut() {
                $_SESSION = array();
                session_destroy();
                header("Location: index.php");
        }
    }

