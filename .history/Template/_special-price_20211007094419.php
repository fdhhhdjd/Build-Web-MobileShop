<?php 
 $brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
 $unique = array_unique($brand);
 sort($unique);
 shuffle($product_shuffle);
 if($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST['top_sale_submit'])){
      // call method addToCart
      $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
}

?>
<section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20">Special Price</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <?php
                array_map(function ($brand){
                    printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                }, $unique);
            ?>
               
              </div>

              <div class="grid">
                  <?php array_map (function ($item  ){?>
                <div class="grid-item border <?php echo $item['item_brand']??"Brand";?>">
                 <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                  <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
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
                       <?php
                            //!Hàm in_array() trong php dùng để kiểm tra giá trị nào đó có tồn tại trong mảng hay không.
                            //! Nếu như tồn tại thì nó sẽ trả về TRUE và ngược lại sẽ trả về FALSE 
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>
                    </div>
                  </div>
                </div>
                </div>
                <?php },$product_shuffle) // closing foreach function ?>
              </div>
            </div>
          </section>
        <!-- !Special Price -->