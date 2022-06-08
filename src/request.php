<?php 

namespace Admin\Medicalstore;

class Request{

    public function get(string $key){
       return $_GET[$key];
    }
    public function post(string $key){
        return $_POST[$key];
    }
    public function file(string $key){
        return $_FILES[$key];  
    }
    public function getHAS(string $key): bool{
        return isset($_GET[$key]);
    }
    public function postHAS(string $key): bool{
        return isset($_POST[$key]);
    }
    public function postClean(string $key){
        return trim(htmlspecialchars($_POST[$key]));
    }
    public function redirect($path){
        header("location:" .URL .$path);
    }
    public function Aredirect($path){
        header("location:" .AURL .$path);
    }
} 