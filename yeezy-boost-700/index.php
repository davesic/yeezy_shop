<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YEEZY Boost 700</title>

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
    
    
 
 
    $count = counts("YEEZY 700");
    ?>
   <section class="catalog">
        <div class="container">
            <div class="row heading">
                <div class="col-lg-9 col-md-6 col-sm-12 col-xs-12 col-12">
                    <h1>Yeezy Boost 700<span><?php echo $count ?></span></h1>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="sortorder">
                        <div class="select"><select id="input-sort" class="sort-select select-custom s-hidden"
                                onchange="location = this.value;">
                                <option value="http://www-yeezy.com/yeezy-boost-350-v2/?sort=p.sort_order&amp;order=ASC">
                                    Сначала популярные</option>
                                <option value="http://www-yeezy.com/yeezy-boost-350-v2/?sort=p.price&amp;order=ASC"
                                    selected="selected">По возрастанию цены</option>
                                <option value="http://www-yeezy.com/yeezy-boost-350-v2/?sort=p.price&amp;order=DESC">По
                                    убыванию цены</option>
                            </select>
                            <div class="styledSelect">По возрастанию цены</div>
                            <ul class="optionz">
                                <li rel="http://www-yeezy.com/yeezy-boost-350-v2/?sort=p.sort_order&amp;order=ASC">Сначала
                                    популярные</li>
                                <li rel="http://www-yeezy.com/yeezy-boost-350-v2/?sort=p.price&amp;order=ASC">По возрастанию
                                    цены</li>
                                <li rel="http://www-yeezy.com/yeezy-boost-350-v2/?sort=p.price&amp;order=DESC">По убыванию
                                    цены</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    <?php $get_sneakers = get_sneakers("YEEZY 700"); ?>
    </div>
</section>
<!--
<div class="product col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
  <div class="inner">
    <div class="stick-pack row ">
                      </div>
    <div class="thumbnail">
      <a href="https://www-yeezy.com/index.php?route=product/product&amp;path=1075&amp;product_id=1523"><img src="https://www-yeezy.com/image/cache/catalog/350v2/second/adidas_yeezy_boost_3antliareflective-250x250.jpg"></a>
    </div>
    <div class="info">
      <div class="price">
                  <p>10 990<span class="currency">руб.</span></p>
              </div>
      <div class="title"><a href="https://www-yeezy.com/index.php?route=product/product&amp;path=1075&amp;product_id=1523">Yeezy Boost 350 V2 Antlia</a></div>
    </div>
    <div class="hover">
                                                                                                                                                                                                                                                                                                  <div class="language">
          
                      <span class="active single">Rus</span>
            <span class="visually-hidden"> us</span>
                  </div>
            <div class="form product-order">
                  <div class="size-blocks">
            <div class="outer active">
                            <input type="hidden" name="option[16455]" value="" class="grid-option">
              <div class="size">
                                  <button data-product-option-id="16455" data-product-option-value-id="133768" class="size-button">36</button>
                                  <button data-product-option-id="16455" data-product-option-value-id="133769" class="size-button">37</button>
                                  <button data-product-option-id="16455" data-product-option-value-id="133770" class="size-button">38</button>
                                  <button data-product-option-id="16455" data-product-option-value-id="133771" class="size-button">39</button>
                                  <button data-product-option-id="16455" data-product-option-value-id="133772" class="size-button">40</button>
                              </div>
                          </div>
                      </div>
                <div class="actions">
          <div class="button">
                          <button class="favourite" title="Добавить в избранное" onclick="wishlist.add2('1523', $(this));"></button>
                      </div>
          <div class="button">
            <button class="watch" title="Быстрый просмотр" onclick="fast.get('1523')"></button>
          </div>
          <div class="button">
            <button class="btn submit" onclick="cart.add('1523', '1', $(this));">в корзину</button>
            <div class="product-info">
              <input type="hidden" class="product-name" value="Yeezy Boost 350 V2 Antlia">
              <input type="hidden" class="product-price" value="10990">
              <input type="hidden" class="product-brand" value="">
              <input type="hidden" class="product-category" value="Yeezy Boost 350 V2">
              <input type="hidden" class="product-variant" value="">
            </div>
          </div>
        </div>
        <input type="hidden" name="product_id" value="1523">
        <input type="hidden" name="quantity" value="1">
      </div>
    </div>
  </div>
</div>
-->
    
</body>


<?php include_once('../page/footer.php'); ?> 