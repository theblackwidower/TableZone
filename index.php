<!DOCTYPE html>
<html>

<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="test1.css">

    <title> My Homepage</title>
    <?php
    require('functions.php');
    ?>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<div class="col-md-12">
    <a href="index.php" class="title1">
        <h1>TableZones</h1>
    </a>
</div>
    
    <div class="navigation">
        <div class="dropdown">
            <button class="dropbtn">ALL PRODUCTS</button>
            <div class="dropdown-content">
                <a href="#">View All Games</a>
                <a href="#">New Releases</a>
                <a href="#">Terrain Crate</a>
                <a href="#">Kings of War</a>
                <a href="#">Armada</a>
                <a href="#">Firefight</a>

            </div>
        </div>
        <div class="dropdown1">
            <button class="dropbtn1">RESOURCES</button>
            <div class="dropdown-content1">
                <a href="#">Deadzone Campaign</a>
                <a href="#">Free Rules</a>
                <a href="#">Easy Army</a>
                <a href="#">Pathfinder Program</a>
                <a href="#">Wallpapers</a>
                <a href="#">clubs</a>
            </div>
        </div>


        <div class="search">
            <input class="In" type="text" placeholder="search for a product..." name="q">
            <button class="btn" type="submit"><i class = "fa fa-search"></i></button>
            <a href="cart.php" class="font-size-14 font-rale">
                <span class = "font-size-20 px-2"><i class = "fa fa-shopping-cart"></i></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
            </a>
            <button class="heart"><i class = "fa fa-heart"></i></button>
        </div>

    </div>


<h1 class="title2">Our Products</h1>

<div class="buttons">
    <a class="button" href="">New Releases</a>
    <a class="button" href="">Digital Products</a>
    <a class="button" href="">Events Tickets</a>
    <a class="button" href="">Painting & Modelling</a>
    <a class="button" href="">Novels & Short Stories</a>
    <a class="button" href="">French</a>
    <a class="button" href="">German </a>
</div>


<!--<section>
    <h1>Our Collection</h1>

    <figure>
        <a href="https://www.manticgames.com/games/kings-of-war/"><img src="../project/img/kow.webp" alt="kings of war"></a>
        <a href="https://www.manticgames.com/games/armada/featured-products-armada/"><img src="../project/img/Armada.webp" alt="Armada"></a>
        <a href="https://www.manticgames.com/games/deadzone/featured-products-deadzone/"> <img src="../project/img/dzzc.webp" alt="Dead Zone"></a>
        <a href="https://www.manticgames.com/games/firefight/"><img src="../project/img/Firefight-Logo.png" alt="Firefight"></a>
        <a href="https://www.manticgames.com/games/star-saga/"><img src="../project/img/starsaga.webp" alt="starsaga"></a>
        <a href="https://www.manticgames.com/games/league-of-infamy/"><img src="../project/img/loi.png" alt="LeageOfInfamy"></a>
        <a href="https://www.manticgames.com/games/hellboy/"><img src="../project/img/hellboy.webp" alt="HellBoy"></a>
        <a href="https://www.manticgames.com/games/dungeon-saga/"><img src="../project/img/dungeonsaga.webp" alt="DungeonSaga"></a>
        <a href="https://www.manticgames.com/games/warpath/featured-products-warpath/"><img src="../project/img/Warpath.jpg" alt="WarPath"></a>
    </figure>
</section>-->

<?php
include('featured.php')
?>
</div>

<?php
include('footer.php');

?>