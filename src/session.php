<?php
namespace Admin\Medicalstore;

class Session {
    public function __construct()
    {
        session_start();
    }
    public function addsesion(string $key,$value){
        $_SESSION[$key] = $value;
    }
    public function get(string $key){
        return $_SESSION[$key];
    }
    public function has(string $key){
        return isset($_SESSION[$key]);
    }
    public function remove($key){
        unset($_SESSION[$key]);
    }
    public function destory(){
        $_SESSION = [];
        session_destroy();
    }
}