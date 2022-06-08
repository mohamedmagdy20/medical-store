<?php
require "../../App.php";

use Admin\Medicalstore\Models\Cats;
use Admin\Medicalstore\Validation\Validator;

if($request->postHAS('submit')){
   
   $id =$request->post('id');
   $name =  $request->post('name');  

   


   $validator =new Validator;
   $validator->validate('name',$name, ['required','str','max']);
  
   if($validator->hasError()){
       $session->addsesion("errors",$validator->getError());
       $request->Aredirect("edit-category.php");
   }
   else{
       $pr = new Cats;
       $pr->update("name ='$name'",$id);
       $session->addsesion("success", "category Updated");
       $request->Aredirect("category.php");
    }
}
else{
    $request->Aredirect("edit-category.php");
}