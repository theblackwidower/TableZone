<?php
include('head.php');
if(!isset($_SESSION))
    {
        session_start();
    }

$db = new DBcontroller();
$product = new product($db);
$Cart = new cart($db);
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $deletedrecord = $Cart->deleteitem($_POST['item_id']);
    }
}
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-size-20">Shopping Cart</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                $cart = [];
                $subTotal = [];
                foreach ($product->getData('cart') as $item) :
                    $cart = $product->getproduct($item['item_id']);
                    $subtotal[] = array_map(function($item) {
                        ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./img/uno.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>


                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <script src="index.js"></script>
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fa fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fa fa-angle-down"></i></button>
                                    </div>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete" class="btn text-danger px-3 border-right">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="wishlist" class="btn text-danger">Save for Later</button>
                                    </form>


                                </div>

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger">
                                    $<span class="product_price" data-id=""</span><?php echo $item['item_price'] ?? 0; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        return $item['item_price'];
                    },$cart);
                endforeach;
                ?>
            </div>
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fa fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-size-20">Subtotal (<?php echo isset($subtotal) ? count($subtotal):0; ?> item) :&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subtotal) ? $Cart->getSum($subtotal) : 0; ?></span></span> </h5>
                        <a href = "checkout.php"><button type='submit' class='btn btn-warning mt-3'>Proceed to Buy</button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
include('footer.php') 
?>


