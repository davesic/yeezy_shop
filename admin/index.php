<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>

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

<body class="subpage">
  

</html>

<?php
require_once '../page/header.php';
?>
<section class="favourite-page">
    <div class="container">
        <div class="row favourite-header">

            <div class="col-lg-6 col-md-6 right">
            </div>
        </div>
        <div class="row wish_empty">
            <div class="col-lg-12">
                <center>
                    <h2>Добавления товара</h2>
                    <form class="form-outline" method ="POST" action="/admin/add_item.php">
                    <div class="form-outline">
                        <input type="text" id="formControlLg" class="form-control form-control-lg" method="post" name="name" placeholder="Название товара"/>
                    </div>

                    <div class="form-outline">
                        <input type="text" id="formControlLg" class="form-control form-control-lg" method="post" name="price" placeholder="Цена"/>
                        <br>
                    </div>

                    <div class="form-outline">
                        <input type="text" id="formControlLg" class="form-control form-control-lg" method="post" name="category" placeholder="Категория"/>
                    </div>
                    <br>
                    <div class="form-outline">
                        <input type="text" id="formControlLg" class="form-control form-control-lg" name="link" method="post" placeholder="url image"/>
                        <br>
                    </div>

                    <div class="form-outline">
                        <textarea class="form-control" id="textAreaExample" rows="2" placeholder="Описание товара" method="post" name="description"></textarea>
                    </div>
                    <br>
                    <div class="form-outline">
                    
                   
                    <input class="btn btn-primary mb-2" type="submit" value="Добавить" method="post">
                    </div>
                    </form>
                   
                </center>
            </div>
        </div>
    </div>


<?php
require_once '../page/footer.php';
?>


</body>