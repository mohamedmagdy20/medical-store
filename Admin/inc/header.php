<?php require "../App.php";?>
<?php if(!$session->has('adminId')){
       $request->Aredirect("login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=AURL;?>assets/fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?=AURL;?>assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=AURL;?>style.css">
    <title>Document</title>
</head>
<body>
 