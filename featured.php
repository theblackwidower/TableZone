<?php
$db = new DBcontroller();
$product = new product($db);;
$product_shuffle = $product->getData();
?>

<section class ="featuredgame">
    <h1>Featured Games</h1>
    <hr>
    <div class="featured">
        <?php foreach ($product_shuffle as $item) {?>
        <div class="container py-5">
            <a href = "<?php printf('%s?item_id=%s','cart.php',$item['item_id'])?>"><img src="<?php echo $item['item_image']??"../project/img/first.jpg"?>" style="height:190px;width:190px;"></a>
            <div class ="text-center">
            <h6 class="py-2"><?php echo $item['item_name']?></h6>
            <div class ="rating text-warning ">
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star-o"></i></span>
            </div>
            <div class ="price py-1">
                <span>$<?php echo $item['item_price']?></span>
            </div>
                <button type ="sumbit" class ="btn btn-warning" onclick = "cart.php">Add To Cart</button>
            </div>
        </div>
        <?php } ?>
    </div>

</section>



