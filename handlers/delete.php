<?php

use Admin\Medicalstore\Cart;

require "../App.php";
if($request->getHAS('id'))
{
    $id = $request->get('id');

   $c = new Cart;
   $cr = $c->remove($id);
   $request->redirect("cart.php");
    $session->addsesion('success','Cart Deleted');
}
