<?php 
$product_shuffle = $product->getData();
?>
<section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20">Special Price</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Redmi</button>
              </div>

              <div class="grid">
                  <?php array_map (function ($item){?>
                <div class="grid-item border <?php echo $item['item_brand']??"Brand";?>">
                 <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <a href="#"><img src="<?php echo $item['item_image']??"assets/products/13.png"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                    <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                      <span>$<?php echo $item['item_price'] ?? '0' ; ?></span>
                      </div>
                      <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                  </div>
                </div>
                </div>
               <?php},$product_shuffle)?>
              </div>
            </div>
          </section>
        <!-- !Special Price -->