<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./bootstrap4/bootstrap.min.css">
    <title>admin_luoi luc si</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php">luoi luc si</a>
        </div>
        <div class="login">
            <a href="">
                <i class="fa fa-user-circle-o">
                    <!-- <?php
            // echo'<img src="./images/'.$_SESSION['admin'].['img'].'" title="'.$_SESSION['admin'].['name'].'">';
            ?> -->
                </i></a>
            <a href="index.php?ctrl=logout"><i class="fa fa-sign-in">
                    <span>Logout</span></i>
            </a>
        </div>
    </header>
    <nav>
        <ul id="myMenu">
            <li><a href="index.php?ctrl=home">Home</a></li>
            <li><a href="index.php?ctrl=product">Product</a></li>
            <li><a href="index.php?ctrl=catalog">Catalog</a></li>
            <li><a href="index.php?ctrl=contact">Contact</a></li>
        </ul>
    </nav>