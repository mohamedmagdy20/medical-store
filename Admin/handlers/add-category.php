<?php

use Admin\Medicalstore\Models\Cats;
use Admin\Medicalstore\Validation\Validator;

require "../../App.php";

if($request->postHAS('submit')){
   
   $name =  $request->post('name');  
  


   $validator =new Validator;
   $validator->validate('name',$name, ['required','str','max']);
  
  
   if($validator->hasError()){
       $session->addsesion("errors",$validator->getError());
       $request->Aredirect("add-category.php");
   }
   else{
       $category =new Cats;
       $res =$category->insert("name","'$name'"); 
       $session->addsesion("errors", $validator->getError());
       $request->Aredirect("category.php");
    }
}
else{
    $request->Aredirect("add-category.php");
}