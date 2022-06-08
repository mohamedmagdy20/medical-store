<?php

namespace Admin\Medicalstore;

class Cart{
    public function add(string $id,array $data ){
        $_SESSION['cart'][$id] = $data;
    }
    public function Count(){
        if(isset($_SESSION['cart'])){
            return count($_SESSION['cart']);
        }
        else{
            return 0;
        }
    }
    public function total()
    {
        $total = 0;
        if(isset($_SESSION['cart'])){
        
        foreach($_SESSION['cart'] as $id=>$prodDate){
            $total +=   $prodDate['qty']*$prodDate['price'];
        }
    }
        return $total;
    }
    public function all(){
        if(isset($_SESSION['cart'])){
            return $_SESSION['cart'];
        }
        else{
            return [];
        }
    }
    public function remove(string $id){

        unset($_SESSION['cart'][$id]);
    }
    public function empty(){
        $_SESSION['cart'] =[];
    }
}