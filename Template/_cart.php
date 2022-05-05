<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['delete'])){
            $deletedrecord = $cartSum->deleteCart($_POST['item_id']);
        }
    }

?>


<section id="cart" class="p-sm-0 p-md-0 p-lg-3 p-xl-5">
            <div class="container-fluid p-">

                <div class="container-fluid p-sm-0 p-md-0 p-lg-3 p-xl-5 border-bottom">
                    <p class="font-size-36 font-roboto fw-light" style="color: #666666;">NÁKUPNÍ KOŠÍK</p>
                </div>


                <?php

                    foreach ($product->getData('cart')as $item) :

                        $cart = $product->getProduct($item['item_id']);
                        
                        $subTotal[] = array_map(function($item){
                    
                ?>
                <div class="container-fluid p-5 shadow p-sm-0 p-md-0 p-lg-3 p-xl-5 mb-5 bg-body rounded my-5">
                    <div class="row border p-3">
                        <div class="col-sm-2">
                            <img src="<?php echo $item['item_image'] ?? "./images/bomba1.jpg" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-6">
                            <h6 class="font-roboto font-size-20 py-5 fw-light" style="color: #666666;"><?php echo $item['item_name'] ?? "Unknown" ?></h6>
                        </div>
                        <div class="col-sm-2">
                            <form method ="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete" class="btn font-roboto font-size-16 py-5 fw-light" style="color: #666666;">Odstranit</button>
                            </form>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="font-roboto font-size-20 py-5 text-end fw-light" style="color: #666666;"><?php echo $item['item_price'] ?? 0 ?> KČ</h6>
                        </div>
                    </div>
                </div>

                <?php
                    return $item['item_price'];
                    }, $cart);
                    
                    endforeach;
                    
                ?>


                <div class="container-fluid p-sm-0 p-md-0 p-lg-3 p-xl-5 border-top">
                    <div class="row row-cols-3">
                        <div class="col">
                            <a class="nav-link font-size-20 font-roboto fw-light" href="index.php" style="color: #666666; text-decoration: underline;">Pokračovat v nákupu</a>
                        </div>
                        <div class="col text-end py-2">
                            <p class="font-size-20 font-roboto fw-light"  style="color: #666666;"><span class="product_price" id="allPrice"><?php echo isset($subTotal) ? $cartSum->getSum($subTotal) : 0 ?></span> KČ</p>
                        </div>
                        <div class="col py-2">
                            <button type="submit" class="btn form-control" style="color: #666666; background-color: #F45E7B;">OBJEDNAT</button>
                        </div>
                        
                        
                    </div>
                </div>



            </div>

        </section>