<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

 /*  include cart items if it is not empty */
    include ('Template/_cart-template.php');
    /*  include cart items if it is not empty */
   /*  include top sale section */
   include ('Template/_new-phones.php');
   /*  include top sale section */
?>

<?php
// include footer.php file
include ('footer.php');
?>


