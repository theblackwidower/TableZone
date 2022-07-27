<?php
include('head.php');
?>
<?php
require('functions.php');
?>
<?php
$db = new DBcontroller();
$product = new product($db);
$item_id = $_GET['item_id']?? 1;
foreach($product->getData() as $item):
if($item['item_id'] == $item_id):
?>
    <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <img src="<?php echo $item['item_image'] ?? "./img/chess.jpg"?>"  alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16">
                            <div class="col">
                                <button type="submit" class="btn btn-dark form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">

                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P:</td>
                                <td><strike>$162.00</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price:</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save:</td>
                                <td><span class="font-size-16 text-danger">$152.00</span></td>
                            </tr>
                        </table>
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fa fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                                </div>

                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fa fa-check border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by : Mar 29  - Apr 1</small>
                            <small>Sold by <a href="#">TableZone </a>(4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - N9B 2M9</small>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fa fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fa fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                    </div>
                </div>

            </div>
        </section>

<?php
endif;
endforeach;
?>
