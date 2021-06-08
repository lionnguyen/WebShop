<?php
     ob_start();
     session_start();
     //Include header php file
     include('header.php');
?>


<?php
     //Include heading page
     include('Template/_h-product-page.php');
     //Include heading page

     //Include top-sale
     include('Template/_top-sale.php');
     //Include top-sale

     //Include special price
     include('Template/_special-price.php');
     //Include special price

     //Include banner ads
     include('Template/_banner-ads.php');
     //Include banner ads

     //Include new product
     include('Template/_new-products.php');
     //Include new product

?>


<?php
     //Include footer php file
     include('footer.php');
?>