<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item) :
        if($item['item_id'] == $item_id) :

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['toCart'])){

            $cartSum->addCart($_POST['user_id'],$_POST['item_id']);

            header("Location: cartAddInfo.php"); 
            exit();
        }
    }
?>

<section id="product" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 p-5">
                    <img src="<?php echo $item['item_image'] ?? "./images/bomba1.jpg"?>" alt="product" class="img-fluid">
                </div>
                <div class="col-sm-6 p-5">
                    <h5 class="font-size-36 font-roboto fw-light" style="color: #666666;"><?php echo $item['item_name'] ?? "Unknown";?></h5>
                    <p class="font-size-20 font-roboto fw-light" style="margin-top: 5rem; color: #666666;"><?php echo $item['item_describ'] ?? "Unknown";?></p>
                    <p class="font-size-20 font-roboto fw-light" style="margin-top: 2rem; color: #666666;"><?php echo $item['item_ingr'] ?? "Unknown";?></p>
                
                    <div class="row row-cols-2">
                        <div class="col">
                            <p class="font-size-20 font-roboto fw-light" style="margin-top: 2rem; color: #666666;"><?php echo $item['item_price'] ?? 0; ?> KČ</p>
                        </div>
                        <div class="col">
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="toCart" class="btn form-control" style="margin-top: 2rem; color: #666666; background-color: #F45E7B;">DO KOŠÍKU</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

<?php
    endif;
    endforeach;
?>