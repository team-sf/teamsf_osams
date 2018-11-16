<?php
include '../classes/connection.php';
include '../classes/controller2.php';

include 'classes/DatabaseHelper.php';
include 'classes/Osams.php';

$osams = new Osams();
@session_start();
$cust_id = $_SESSION["cust_id"];


$product = new Controller2();
$array = array("*");

if(isset($_POST['addcart'])){
$pid = $_POST['addcart'];
$p = $_POST['price'];
$pprice = $p[$pid];
$date = date('Y-m-d');

$add = new Controller2();
$column = array("cart_cust_id", "cart_prod_id", "cart_qty", "cart_total", "cart_date", "cart_ispaid");
$value = array($cust_id, $pid, 1, $pprice, $date, 0);
$add->create("cart_tbl", $column, $value);

header('location: cart1.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-1/shop-grid-ls.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 05:42:42 GMT -->
<head>
    <meta charset="utf-8">
    <title>Shop Grid Left Sidebar
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="css/styles.min.css">
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="customizer/customizer.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4DJFPZ');
      
    </script>
    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    
    <header class="navbar navbar-sticky">
        <?php include 'header.php'?>
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Shop Grid Left Sidebar</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Shop Grid Left Sidebar</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 order-lg-2">
            
            <!-- Products Grid-->
            <div class="isotope-grid cols-3 mb-2">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              <form role="form" method="post">
              <!-- Product-->
              <?php
                if(isset($_GET["id"]))
                  $sqlProd = "SELECT * FROM product_tbl WHERE id=".$_GET["id"];
                else
                  $sqlProd = "SELECT * FROM product_tbl";

                foreach($osams->select($sqlProd) AS $result) {
              ?>
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="#"><img src="../backend/uploads/<?php echo $result["image"];?>" style="width: 100%; height: 250px;" alt="Product"></a>
                  <h3 class="product-title"><a href="#"><?php echo $result["prod_name"];?></a></h3>
                  <h4 class="product-price">₱<?php echo number_format($result["prod_price"], 2);?></h4>
                  <input type="hidden" value="<?php echo $result["prod_price"];?>" name="price[<?php echo $result["id"];?>]">
                  <div class="product-buttons">
                    <button type="submit" class="btn btn-outline-primary btn-sm" name="addcart" value="<?php echo $result["id"];?>">Add to Cart</button>
                  </div>
                </div>
              </div>   
              <?php
              }
              ?>
            </form>
            </div>
          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4 order-lg-1">
            <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalShopFilters"><i class="icon-layout"></i></button>
            <aside class="sidebar sidebar-offcanvas">
              <!-- Widget Categories-->
              <section class="widget widget-categories">
                <h3 class="widget-title">Shop Towns</h3>
                <ul>
                  <?php
                    $sqlStatement = "SELECT * FROM town_tbl";
                    foreach ($osams->select($sqlStatement) AS $value) {
                  ?>
                  <li><a href="shop-grid-ls.php?id=<?php print $value["id"]; ?>"><?php print $value["town_name"]; ?></a></li>
                  <?php
                    }
                  ?>

                </ul>
            </aside>
          </div>
        </div>
      </div>
      <!-- Site Footer-->
      <footer class="site-footer">
        <?php include 'footer.php'?>
      </footer>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/scripts.min.js"></script>
    <!-- Customizer scripts-->
    <script src="customizer/customizer.min.js"></script>
  </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-1/shop-grid-ls.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 05:42:48 GMT -->
</html>