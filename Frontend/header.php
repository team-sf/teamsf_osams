<?php
@session_start();
?>
<form class="site-search" method="get">
  <input type="text" name="site_search" placeholder="Type to search...">
  <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
</form>
<div class="site-branding">
  <div class="inner">
    <!-- Off-Canvas Toggle (#shop-categories)
    <!-- Site Logo--><a class="site-logo" href="index.php"><img src="img/logo/osamslogo.png" alt="Unishop"></a>
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
    
    <li class="has-megamenu"><a href="shop-grid-ls.php"><span>Products</span></a>
      
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
             
              <h6 class="user-name"></h6>
            </div>
          </li>
          
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
      <?php
        if($_SESSION['username'] != "") {
      ?>
      <div class="cart"><a href="cart.php"></a><i class="icon-bag"></i><span class="count">View Cart</span></div>
    <?php } ?>
    </div>
  </div>
</div>