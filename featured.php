<?php
if(!isset($_SESSION))
{
    session_start();
}
$db = new DBcontroller();
$product = new product($db);;
$product_shuffle = $product->getData();
$Cart = new cart($db);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if (isset($_POST['sale'])) {
        $Cart->addtocart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<section class ="featuredgame">
    <h1>Featured Games</h1>
    <hr>
<div class="container">
    <div class="row">
        <?php foreach ($product_shuffle as $item) {?>
        <div class="col-md-3 product">
            <a href = "<?php printf('%s?item_id=%s','product.php',$item['item_id'])?>"><img src="<?php echo $item['item_image']??"../project/img/first.jpg"?>" style="height:190px;width:190px;"></a>
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
                <form method ="post">
                <input type = "hidden" name ="item_id" value="<?php echo $item['item_id']?? '1';?>" >
                <input type = "hidden" name ="user_id" value="<?php echo 1;?>" >
                    <?php
                    if(in_array($item['item_id'],$Cart->getcartid($product->getData('cart')) ?? []))
                    {
                       echo '<button type ="sumbit"  disabled class ="btn btn-success" >In Cart</button>';
                    }
                    else{
                       echo '<button type ="sumbit" name = "sale" class ="btn btn-warning" >Add To Cart</button>';
                    }
                    ?>

                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</section>



