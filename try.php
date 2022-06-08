<?php

use Admin\Medicalstore\Cart;

 require "./inc/header.php";?>
pppppppp
<?php require "./inc/footer.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./inc/success.php";
    $test = new Cart;
    $res = $test->all();
    echo "<pre>";
    print_r($res)?>
</body>
</html>