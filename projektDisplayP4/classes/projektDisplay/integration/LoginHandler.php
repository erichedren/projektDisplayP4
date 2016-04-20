<?php
    namespace projektDisplay\integration;
    use projektDisplay\model\Login;
    
    class LoginHandler {
        
        public function __construct() {
            include_once 'connection.php';
        }
        public function logIn(Login $login) {
            include_once 'connection.php';
            $userName = $login->getUsername();
            $password = $login->getPassword();
            $query = mysql_query("SELECT*FROM users WHERE username='".$userName."' AND password = '".$password."'" ) or die(mysql_error());
            $count = mysql_num_rows($query);
            if($count == 1) {
                return true;
            }
            else {
                return false;
            }
        }
        public function logOut() {
                $_SESSION = array();
                session_destroy();
                header("Location: index.php");
        }
        public function createUser($username,$password,$firstname,$lastname,$email) {
            include_once 'connection.php';
            $username = $username;
            $password = password_hash($password, PASSWORD_DEFAULT);
            $firstname =  $firstname;
            $lastname = $lastname;
            $email = $email;
            mysql_query("insert into users (username,password,firstname,lastname,email,reg_time) values('".$username."','".$password."','".$firstname."','".$lastname."','".$email."',now())") or die(mysql_error());
        }
    }

