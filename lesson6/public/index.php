<?php
include_once "../models/db_goods.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Интернет-магазин игрушек</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body> 
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content">
        <h1>Интернет-магазин игрушек</h1>
        <p class="hello">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <hr>
        <?php
        $goods = goods_all($link);
        if($goods){
            foreach ($goods as $good){?>
                <div class="item">
                    <a href="item.php?id=<?=$good['id']?>"><img src="<?=$good['small_src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></a>
                    <h3 class="item-name"><a href="item.php?id=<?=$good['id']?>"><?=$good['name']?></a></h3>
                    <p class="price"><?=$good['price']?>р.</p>
                    <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
                </div>
            <?}
        }
        ?>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>