
<?php
ob_start();
session_start();
include_once('includes/functions.php');
function andadelHeader($title, $active, $description)
{?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="keywords" content="my, keywords"> -->
    <!-- <meta name="author" content="name, email@gmail.com"> -->
    <meta name="copyright" content="Andadel">
    <meta name="description" content="<?php echo $description; ?>">
    <?php

        if(basename($_SERVER['PHP_SELF']) === "reset-password.php")
        {
            echo '<meta name="robots" content="noindex, nofollow">';
        }
        else
        {
            echo '<meta name="robots" content="index, follow">';
        }

    ?>

    <!-- This is for social media sharing -->

    <!-- <meta property="og:title" content="my title">
    <meta property="og:url" content="https://andadel.com/">
    <meta property="og:image" content="https://andadel.com/images">
    <meta property="og:type" content="article/website">
    <meta property="og:description" content="my description"> -->
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="images/andLogo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <nav>
        <div class="container-fluid home">
            <div class="logo">
                <div class="logo-image">
                <a <?php if($active === 'home')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="home"';
                } ?>><img src="images/andLogo.png" alt="logo"></a>
                </div>
                <span>andadel</span>
            </div>
            <!-- <div class="logo-text">
                <span>andadel</span>
            </div> -->
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="bx bx-menu"></i>
            </label>
            <ul>
                <li><a <?php if($active === 'home')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="home"';
                } ?>>Home</a></li>
                <li><a <?php if($active === 'about')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="about"';
                } ?>>About</a></li>
                <li><a <?php if($active === 'products')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="products"';
                } ?>>Products</a></li>
                <li><a <?php if($active === 'contact')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="contact"';
                } ?>>Contact</a></li>
                <li><a <?php if($active === 'login')
                {
                    echo 'class="active" href="#"';
                }else{
                    echo 'href="login"';
                } ?>>Login</a></li>
            </ul>
        </div>
    </nav>

<?php
}
?>