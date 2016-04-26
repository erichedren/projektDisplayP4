<?php
    namespace projektDisplay\integration;
    use projektDisplay\model\Login;
    
    class DateMessageHandler {
        
        private $IP;
		private $db_user;
		private $db_password;
		private $db;
		private $db_path;
		
		public function __construct(){
			$this->IP="127.0.0.1";
			$this->db_user = "root";
			$this->db_password = "pass";
			$this->db = "grupp8";
		}
        public function addMessage($messageId,$dateStart,$dateStop) {
			/*
			$link = mysqli_connect($this->IP, $this->db_user, $this->db_password, $this->db) or die(mysql_error);
			$queryId = ("SELECT message FROM messages WHERE m_id ='"$messageId"';");
			$row = mysqli_fetch_row(mysqli_query($link,$queryId);
			$queryMess = ("INSERT INTO displayedMessage (message,time_start,time_stop) VALUES ('"$row"','"$dateStart"','"$dateStop"');");
			$result = mysqli_query($link, $query) or die(mysqli_error);
        */
		}
    }

