<?php

use Admin\Medicalstore\Cart;
use Admin\Medicalstore\Models\Orders;
use Admin\Medicalstore\Models\Orders_details;
use Admin\Medicalstore\Validation\Validator;

require "../App.php";

$cart = new Cart;
if($request->postHAS('submit') ){
    $name = $request->post('name');
    $email =$request->post('email');
    $phone = $request->post('phone');
    $address =$request->post('address');

    $validator = new Validator;
    $validator->validate('name',$name,['required','str','max']);

    if(empty($email)){
        $validator->validate('email',$email,['required','email','Max']);
    }
    if(empty($phone)){
        $validator->validate('phone',$phone,['required','numeric']);
    }
    if(empty($address)){
        $validator->validate('address',$address,['str','max']);
    }

    if($validator->hasError()){
        $session->addsesion("errors",$validator->getError());
        $request->redirect("cart.php");
    }
    else{
        $order = new Orders;
        $order_details =new Orders_details;
        $orderId = $order->insertAndGetId("name, email, phone, address","'$name','$email','$phone','$address'");
        foreach($cart->all() as $prodId=>$prodDate){
             $qty = $prodDate['qty'];
             $order_details->insert("orders_id, products_id, qty","'$orderId','$prodId','$qty'");
        }
        $cart->empty();
        $session->addsesion('success','Order Submited');
        $request->redirect("index.php");
    }
}