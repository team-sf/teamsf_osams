<?php
include 'classes/DatabaseHelper.php';
include 'classes/Osams.php';
$osams = new Osams();

session_start();
$userid =  $_SESSION['username'];
?>
<form class="site-search" method="get">
  <input type="text" name="site_search" placeholder="Type to search...">
  <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
</form>
<div class="site-branding">
  <div class="inner">
    <!-- Off-Canvas Toggle (#shop-categories)
    <!-- Site Logo--><a class="site-logo" href="index.php"><img src="img/logo/logo.png" alt="Unishop"></a>
  </div>
</div>
<!-- Main Navigation-->
<nav class="site-menu">
  <ul>
    <li class="has-megamenu active"><a href="index.php"><span>Home</span></a>
      <!-- <ul class="mega-menu">
        <li><a class="d-block img-thumbnail text-center navi-link" href="index.html"><img alt="Featured Products Slider" src="img/mega-menu-home/01.jpg">
            <h6 class="mt-3">Featured Products Slider</h6></a></li>
        <li><a class="d-block img-thumbnail text-center navi-link" href="home-featured-categories.html"><img alt="Featured Categories" src="img/mega-menu-home/02.jpg">
            <h6 class="mt-3">Featured Categories</h6></a></li>
        <li><a class="d-block img-thumbnail text-center navi-link" href="home-collection-showcase.html"><img alt="Products Collection Showcase" src="img/mega-menu-home/03.jpg">
            <h6 class="mt-3">Products Collection Showcase</h6></a></li>
        <li>
          <div class="img-thumbnail text-center"><img alt="More To Come. Stay Tuned!" src="img/mega-menu-home/04.jpg">
            <h6 class="mt-3">More To Come. Stay Tuned!</h6>
          </div>
        </li>
      </ul> -->
    </li>
    
    <li class="has-megamenu"><a href="#"><span>Categories</span></a>
      <ul class="mega-menu">
        <li><span class="mega-menu-title">Top Categories</span>
          <ul class="sub-menu">
            <li><a href="#">Men's Shoes</a></li>
            <li><a href="#">Women's Shoes</a></li>
            <li><a href="#">Shirts and Tops</a></li>
            <li><a href="#">Swimwear</a></li>
            <li><a href="#">Shorts and Pants</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
        </li>
      </ul>
    </li>
     <li class="has-megamenu"><a href="about.php"><span>About Us</span></a>
     <li class="has-megamenu"><a href="contacts.php"><span>Contact Us</span></a>


   
  </ul>
</nav>
<!-- Toolbar-->
<div class="toolbar">
  <div class="inner">
    <div class="tools">
      <div class="search"><i class="icon-search"></i></div>
      <?php
      if($_SESSION['username'] != "")
      {?>
        <div class="account"><i class="icon-head"></i>
        <ul class="toolbar-dropdown">
          <li class="sub-menu-user">
            <div class="user-info">
             
              <h6 class="user-name"><?php print $userid;?></h6>
            </div>
          </li>
          <li class="sub-menu-separator"></li>
          <li><a href="logout.php"> <i class="icon-head"></i>Logout</a></li>
        </ul>
      </div>
  <?php    
}
else
{?>
<div class="account"><a href="login.php"><i class="icon-head"></i></a></div>
<?php
}
      
      ?>
      <div class="cart"><a href="cart.php"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
        <div class="toolbar-dropdown">
          <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/01.jpg" alt="Product"></a>
            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
          </div>
          <div class="toolbar-dropdown-group">
            <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.php">View Cart</a></div>
            <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>