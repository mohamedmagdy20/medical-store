<?php
require "../../App.php";

use Admin\Medicalstore\Validation\Validator;
use Admin\Medicalstore\File;
use Admin\Medicalstore\Models\Products;

if($request->postHAS('submit')){
   
   $name =  $request->post('name');  
   $cat_id =  $request->post('cat_id');
   $price =  $request->post('price');
   $pieces_no =  $request->post('pieces');
   $desc =  $request->post('desc');
   $img =  $request->file('img');

   print_r($cat_id);

   $validator =new Validator;
   $validator->validate('name',$name, ['required','str','max']);
   //$validator->validate('price',$price, ['required','numeric']);
   $validator->validate('desc',$desc, ['required','str']);
   
  
   if($validator->hasError()){
       $session->addsesion("errors",$validator->getError());
       $request->aredirect("add-products.php");
   }
   else{
       $file = new File($img);
       $imgUpload = $file->rename()->upload();
       $pr = new Products;
       $res = $pr->insert("name,description,price,pieces_no,cat_id,img","'$name','$desc','$price','$pieces_no','$cat_id','$imgUpload'");   
       print_r($res); 
       $session->addsesion("errors", $validator->getError());
       $request->Aredirect("products.php");
    }
}
else{
    $request->Aredirect("add-products.php");
}
