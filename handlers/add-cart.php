<?php
require "../App.php";
use Admin\Medicalstore\Cart;
if($request->postHAS('submit')){
    $id =$_POST['id'];
    $name =$_POST['name'];
    $price =$_POST['price'];
    $quntity =$_POST['qty'];
    $img = $_POST['img'];
    
    $data = [
        'id' =>$id,
        'name' =>$name,
        'price'=>$price,
        'qty'=>$quntity,
        'img'=>$img
    ];
    $cart= new Cart;
    $cart->add($id,$data);
    $request->redirect("index.php");
    $session->addsesion('success','Cart Added');
}