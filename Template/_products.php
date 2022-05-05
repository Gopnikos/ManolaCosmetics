<?php
  shuffle($product_shuffle);
?>

<section id="products">
      <div class="container" style="margin-top: 10%;">

        <div id="filters" class="button-group text-end">
          <button class="btn is-checked" data-filter="*">Všechno</button>
          <button class="btn" data-filter=".Bomba">Bomby</button>
          <button class="btn" data-filter=".Mydlo">Mýdla</button>
          <button class="btn" data-filter=".Peeling">Peeling</button>
          <button class="btn" data-filter=".Sul">Soli</button>
        </div>


        <div class="grid">

          <?php array_map(function($item){ ?>

          <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand";?>" style="margin-right: 1rem; margin-top: 1rem;">
            <div class="item py-2" style="width: 300px;">
              <div class="product font-roboto">
                <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "./images/bomba1.jpg";?>" alt="bomba1" class="img-fluid"></a>
                <div class="text-center">
                  <h6 class="font-size-16 fw-light mt-3"><?php echo $item['item_name'] ?? "Unknown";?></h6>
                  <div class="price py-2 font-size-16 fw-light" style="color: #666666">
                    <span><?php echo $item['item_price'] ?? 0;?> KČ</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <?php }, $product_shuffle) ?>

        </div>

      </div>
</section>