<?php
require_once "./App.php";
use Admin\Medicalstore\Cart;
use Admin\Medicalstore\Models\Cats;
$cats =new Cats;
$Cs = $cats->getAll();

$cart =new Cart;
$count = $cart->Count();
$total =$cart->total();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL;?>assets/style/style.css">
    <link rel="stylesheet" href="<?=URL;?>assets/fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="cart">
    <div class="d-flex">
        <div class="cart-img">
            <div class="d-flex justify-content-center align-items-center">
            <img src="./assets/Images/cart.png" alt="">
            <div class="count pt-4">
                <p class="bound"><?=$count?></p>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="up">
     <div class="arrow-up">
         <a href="<?=URL;?>index.php">
        <img src="./assets/Images/arrow-up-solid.svg"  alt="">
        </a>
        </div>
         
    </div>
</div>
<nav class="navbar navbar-light bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand text-primary" href="<?= URL;?>index.php">MedicalStore</a>
    <form  method="GET" action="<?= URL; ?>search.php" class="d-flex m-auto">
          <input class="form-control  me-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" name="submit" type="submit">Search</button>
        </form>        
    <button class="navbar-toggler border-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon text-secondary"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MedicalStore</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=URL;?>index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=URL;?>cart.php">Cart</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <?php foreach($Cs as $cat):?>
              <li><a class="dropdown-item" href="<?=URL;?>category.php?id=<?=$cat['id']?>"><?=$cat['name']?></a></li>
              <?php endforeach;?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<?php include("./inc/success.php");?>
