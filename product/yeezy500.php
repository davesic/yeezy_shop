<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>

    <meta name="description"
        content="Интернет-магазин Yeezy Boost. У нас вы можете купить самые крутые модели кроссовок Yeezy 350, 380, 500,  700 - все это доступно к заказу с доставкой по Киеву и всей Украине.">
    <meta property="og:title" content="Yeezy Boost интернет-магазин - купить кроссовки Yeezy Boost с доставкой">

    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/ion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="../css/app/develop.css">
    <link rel="stylesheet" href="../css/app/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="../css/app/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/app/slick.css">
</head>
</html>
<?php include_once('../page/header.php'); ?>
<?php require_once '../system/bd.php'; ?>
<?php require_once '../function.php'; ?>

<body class="subpage">
    
<?php
$id = array_key_first($_GET);
//echo $id;
$product = get_product_url("YEEZY 500", $id);
?>






</body>
<?php include_once('../page/footer.php'); ?> 