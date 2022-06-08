<?php

use Admin\Medicalstore\Models\Admin;
use Admin\Medicalstore\Validation\Validator;

require "../../App.php";

if($request->postHAS('submit')){
    $email =$request->post('email');
    $password =$request->post('password');
    $validator = new Validator;
    $validator->validate('email',$email,['required','email','max']);
    $validator->validate('password',$password,['required','str','max']);
   
    if($validator->hasError()){
        $session->addsesion("errors",$validator->getError());
        $request->Aredirect("login.php");
    }
    else{
        $admin =new Admin;
        $isLogin =$admin->login($email,$password,$session);
        if($isLogin){
            $request->Aredirect("index.php");
        }
        else{
            $session->addsesion('errors',['Email Not Valid']);
            $request->Aredirect('login.php');
        }
    }

}
else{
    $request->Aredirect('login.php');
    
}