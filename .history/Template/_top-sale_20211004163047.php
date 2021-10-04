<?php 
$product_shuffle = $product->getData();
?>
<section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                <?php foreach ($product_shuffle as $item) { ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Samsung Galaxy 10</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$152</span>
                        </div>
                        <form method="post">
                
                            <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>;
                            

                        </form>
                    </div>
                </div>
            </div>
            <?php}
          </div>
          <!-- !owl carousel -->
      </div>
  </section>