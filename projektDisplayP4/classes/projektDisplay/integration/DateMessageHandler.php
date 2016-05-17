<?php
    namespace projektDisplay\integration;
    
    class DateMessageHandler {
        
        private $IP;
		private $db_user;
		private $db_password;
		private $db;
		private $db_path;
		
		public function __construct($IP, $db_user, $db_password, $db){
			$this->IP=$IP;
			$this->db_user = $db_user;
			$this->db_password = $db_password;
			$this->db = $db;
		}
		
        public function getMessage($V){
			$link = mysqli_connect($this->IP, $this->db_user, $this->db_password, $this->db);
			$query = ("SELECT message FROM messages WHERE m_id='".$V."'");
			$result = mysqli_fetch_row(mysqli_query($link, $query)) or die(mysqli_error($link));
			return $result[0];
		}
			
        public function addMessageWithDate($message,$dateStart,$dateStop) {
			$link = mysqli_connect($this->IP, $this->db_user, $this->db_password, $this->db);
			$queryMess = ("INSERT INTO displayedMessage (message,time_start,time_stop, date) VALUES ('".$message."','".$dateStart."','".$dateStop."', NOW())");
			$result = mysqli_query($link, $queryMess) or die(mysqli_error($link));
		}
		
		public function addMessage($message){
			$link = mysqli_connect($this->IP, $this->db_user, $this->db_password, $this->db);
			$queryMess = ("INSERT INTO displayedMessage (message, date) VALUES ('".$message."', NOW())");
			$result = mysqli_query($link, $queryMess) or die(mysqli_error($link));
		}
		public function displayGetMessage() {
			$link = mysqli_connect($this->IP, $this->db_user, $this->db_password, $this->db);
			$query = ("SELECT message FROM displayedmessage ORDER BY date DESC");
			$result = mysqli_fetch_row(mysqli_query($link, $query)) or die(mysqli_error($link));
			return $result[0];
			/*
			SELECT message FROM displayedMessage ORDER BY date DESC
			*/
		}
    }

