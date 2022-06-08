<?= require "../App.php";?>
<?= include "../inc/errors.php"?>
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
    <div class="container pt-5">
<div class=" bg-white p-5 shadow p-3 mb-5 rounded-3">
    <form action="<?= AURL;?>handlers/handel-login.php" method="POST">
    <h2 class="text-center mb-4">Login</h2>
        <input class="form-control mb-3" placeholder="Enter Email" type="text" name="email">
        <input class="form-control mb-3" placeholder="Enter Password" type="text" name="password">
        <input class="btn btn-primary"s type="submit" name="submit" value="submit">
    </form>
</div>
</div>
<?= require "inc/footer.php";?>
