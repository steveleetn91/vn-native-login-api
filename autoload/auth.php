<?php 
use Firebase\JWT\JWT;

if(!class_exists('vnnative_authen')) {
    class vnnative_authen {
        public $payload;
        public function __construct(){
            $this->payload = array(
                "iss" => home_url(),
                "aud" => home_url(),
                "iat" => 1356999524,
                "nbf" => 1357000000,
                "data" => array()
            );
        }
        public $token = '';
        public function makeToken(){
            $this->token = JWT::encode($this->payload, VNNATIVE_FRAMEWORK_LOGIN_API_AUTHEN_KEY);
        }
        public function checkToken(){

        }
        public function getInfo(){

        }
        public function __set($key,$value){
            $this->payload[$key] = $value;
        }
    }
}