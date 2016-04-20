<?php
    namespace projektDisplay\model;
    
    class Login {
        
        private $user;
        private $pw;
        
        public function __construct($username,$password) {
            $this->user = $username;
            $this->pw = $password;
        }
        public function getUsername() {
            return $this->user;
        }
        public function getPassword() {
            return $this->pw;
        }
    }
