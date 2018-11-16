<?php
include '../classes/connection.php';

include '../classes/controller2.php';

include 'classes/DatabaseHelper.php';
include 'classes/Osams.php';

$osams = new Osams();
@session_start();

$custid = $_SESSION["cust_id"];
$cart = new Controller2();
$array = array("*");
$total = null;



if (isset($_POST['update_cart1'])) {
  $cart = $_POST["cart_id"];
  $price = $_POST["price"];
  $qty = $_POST["qty"];

  foreach ($qty as $key => $value) {
    $a = $price[$key];
    $cartID = $cart[$key];
    $newAmount = floatval($a) * floatval($value);

    print $updateCart = "UPDATE cart_tbl set cart_qty = '$value', cart_total = '$newAmount' WHERE id = '$cartID'";
    $osams->updateCart($updateCart);

  }  
}

if(isset($_POST['update_cart'])){
  $var = $_POST['qty'];
  $var2 = $_POST['cart_id'];
  $var3 = $_POST['price'];
  foreach ($var as $key => $value) {

    $qt = $value;
    $cid = $var2[$key];
    $price= $var3[$key];

    $amount = $value * $price;
    $updatecart = new Controller2();
    $column = array("cart_qty", "cart_total");
    $value = array($qt, $amount);
    $updatecart->update("cart_tbl", $column, $value, $cid);
  }
}

if(isset($_POST['remove'])){
  $cartid = $_POST['remove'];
  $removeItem = "DELETE FROM cart_tbl WHERE id = '$cartid'";
  $osams->updateCart($removeItem);
  // $delcart = new Controller2();
  // $delID = $_POST['remove'];
  // $delcart->delete("cart_tbl", $delID);
}

if(isset($_POST['clear'])){
  $ctid = $_POST['clear'];
  $clearcart = new Controller2();
  $query = "DELETE FROM cart_tbl WHERE cart_cust_id = ".$ctid." AND cart_ispaid = 0";
  $clearcart->sqlquery($query);
}
$sqlStatement = "SELECT SUM(cart_total) AS 'total' FROM cart_tbl JOIN product_tbl ON cart_prod_id=product_tbl.id WHERE cart_cust_id='$custid' AND cart_ispaid=0";
                foreach($osams->select($sqlStatement) AS $value){
                    $total = $value['total'];
                  }
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-1/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 05:43:24 GMT -->
<head>
    <meta charset="utf-8">
    <title>Cart
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

    <script type="text/javascript">

    function  quantity(q) {
      document.getElementById("txt_guest_id").value = id;
    }
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
            <h1>Cart</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Cart</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <!-- Shopping Cart-->
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Unit Price</th>
                <th class="text-center">Amount</th>
                <form role="form" method="post">
                <th class="text-center"><button type="submit" class="btn btn-sm btn-outline-danger" value="<?php echo$cust_id;?>" name="clear">Clear Cart</button></th>
                </form>
              </tr>
            </thead>
            <tbody>
              <?php
                $sqlStatement = "SELECT product_tbl.image AS 'image', product_tbl.prod_name as 'prod_name', cart_qty as 'cart_qty', cart_tbl.id as 'id', product_tbl.prod_price as 'prod_price', cart_tbl.cart_total as 'cart_total' FROM cart_tbl JOIN product_tbl ON cart_prod_id=product_tbl.id WHERE cart_cust_id='$custid' AND cart_ispaid=0";
                if ($osams->select($sqlStatement) != 0) {
                foreach($osams->select($sqlStatement) AS $value){

              ?>
              <tr>
                <td>
                  <form role="form" method="post">
                  <div class="product-item"><a class="product-thumb" href="#"><img src="../backend/uploads/<?php echo $value["image"];?>" alt="Product"></a>
                    <div class="product-info">
                      <h4 class="product-title"><a href="#"><?php echo $value["prod_name"];?></a></h4>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="count-input">
                    <input class="form-control" type="number" value="<?php echo $value["cart_qty"];?>" name="qty[]">
                    <input type="hidden" value="<?php echo $value["id"];?>" name="cart_id[]">
                    <input type="hidden" value="<?php echo $value["prod_price"];?>" name="price[]">
                  </div>
                </td>
                <td class="text-center text-lg text-medium">₱<?php echo number_format($value["prod_price"], 2);?></td>
                <td class="text-center text-lg text-medium">₱<?php echo number_format($value["cart_total"], 2);?></td>
                <td class="text-center"><button type="submit" class="btn btn-sm btn-outline-danger" name="remove" value="<?php echo $value["id"];?>" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
              </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="shopping-cart-footer">
          <div class="column text-lg">Subtotal: <span class="text-medium">₱<?php echo number_format($total, 2);?></span></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column"><a class="btn btn-outline-secondary" href="shop-grid-ls.php"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
          <div class="column"><button type="submit" class="btn btn-primary" name="update_cart1">Update Cart</button>
          </form>
            <a class="btn btn-success" href="checkout-payment.php">Checkout</a></div>
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

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-1/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 05:43:24 GMT -->
</html>