<?php
//!cung cấp cho bạn bất cứ thứ gì đã được "lưu" vào bộ đệm kể từ khi nó được bật 
//!Bắt đầu nhớ mọi thứ thường sẽ được xuất ra giu noi dung ben phia may chu
ob_start();
// include header.php file
include ('header.php');
?>

<?php

 
      /*  include cart items if it is not empty */
      count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
      /*  include cart items if it is not empty */
  
          /*  include top sale section */
        //   count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
        include ('Template/_wishilist_template.php')
          /*  include top sale section */
  
  
      /*  include top sale section */
          include ('Template/_new-phones.php');
      /*  include top sale section */
  

?>

<?php
// include footer.php file
include ('footer.php');
?>


