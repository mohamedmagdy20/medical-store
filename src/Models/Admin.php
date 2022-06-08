<?php
namespace Admin\Medicalstore\Models;

use Admin\Medicalstore\Db;
use Admin\Medicalstore\Session;

class Admin extends Db{
    public function __construct()
    {
        $this->table = "admin";
        $this->connect();
    }    
    public function login(string $email, string $password, Session $session){
        $sql = "SELECT * FROM `admin` WHERE email ='$email' LIMIT 1";
        $res =mysqli_query($this->conn,$sql);
        $admin = mysqli_fetch_assoc($res);

        if(! empty($admin)){
            $hashPassword = $admin['password'];
            $isSame = password_verify($password,$hashPassword);
            if($isSame){
                $session->addsesion('adminId',$admin['id']);
                $session->addsesion('adminName',$admin['name']);
                $session->addsesion('adminEmail',$admin['email']);
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
        
    public function logout(Session $session){

        $session->remove('adminId');
        $session->remove('adminName');
        $session->remove('adminEmail');
        

    }   
}