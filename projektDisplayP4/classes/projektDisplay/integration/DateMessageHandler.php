<?php
    namespace projektDisplay\integration;
    
    class DateMessageHandler {
        
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
        public function addMessage($messageId,$dateStart,$dateStop) {
			$link = mysqli_connect($this->IP, $this->db_user, $this->db_password, $this->db) or die(mysql_error());
			$queryMess = ("INSERT INTO displayedMessage (message_id,time_start,time_stop) VALUES ('".$messageId."','".$dateStart."','".$dateStop."');");
			$result = mysqli_query($link, $queryMess) or die(mysql_error());
		}
    }

