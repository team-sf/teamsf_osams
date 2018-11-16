<?php
include 'classes/DatabaseHelper.php';
include 'classes/Osams.php';
$osams = new Osams();
session_start();
$custid = $_SESSION['cust_id'];
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-1/checkout-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 05:45:58 GMT -->
<head>
    <meta charset="utf-8">
    <title>Checkout
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
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-T4DJFPZ" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Template Customizer-->
    <div class="customizer-backdrop"></div>
    <div class="customizer">
      <div class="customizer-toggle"><i class="icon-cog"></i></div>
      <div class="customizer-body">
        <div class="btn-group mb-4">
          <button class="btn btn-white btn-rounded btn-block dropdown-toggle my-0" type="button" data-toggle="dropdown">Choose Template</button>
          <div class="dropdown-menu"><a class="dropdown-item" href="index.php">Template 1 (Clothing)</a><a class="dropdown-item" href="http://themes.rokaux.com/unishop/v3.0/template-2/index.php">Template 2 (Furniture)</a><a class="dropdown-item" href="http://themes.rokaux.com/unishop/v3.0/template-3/index.php">Template 3 (Electronics)</a></div>
        </div>
        <div class="customizer-title">Choose color</div>
        <div class="customizer-color-switch"><a class="active" href="#" data-color="default" style="background-color: #0da9ef;"></a><a href="#" data-color="2ecc71" style="background-color: #2ecc71;"></a><a href="#" data-color="f39c12" style="background-color: #f39c12;"></a><a href="#" data-color="e74c3c" style="background-color: #e74c3c;"></a></div>
        <div class="customizer-title">Header option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="header-option">
            <option value="sticky">Sticky</option>
            <option value="static">Static</option>
          </select>
        </div>
        <div class="customizer-title">Footer option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="footer-option">
            <option value="dark">Dark</option>
            <option value="light">Light</option>
          </select>
        </div><a class="btn btn-primary btn-rounded btn-block margin-bottom-none" href="https://wrapbootstrap.com/theme/unishop-universal-e-commerce-template-WB0148688/?ref=rokaux">Buy Unishop</a>
      </div>
    </div>
    <!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">Shop Categories</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Loafers</a></li>
              <li><a href="#">Boat Shoes</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Flats</a></li>
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Heels</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Shirts &amp; Tops</a></li>
              <li><a href="#">Pants</a></li>
              <li><a href="#">Jackets</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Dresses</a></li>
              <li><a href="#">Shirts &amp; Tops</a></li>
              <li><a href="#">Shorts</a></li>
              <li><a href="#">Swimwear</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Kid's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Boots</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Crib Shoes</a></li>
              <li><a href="#">Loafers</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Handbags</a></li>
              <li><a href="#">Backpacks</a></li>
              <li><a href="#">Luggage</a></li>
              <li><a href="#">Wallets</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sunglasses</a></li>
              <li><a href="#">Hats</a></li>
              <li><a href="#">Watches</a></li>
              <li><a href="#">Jewelry</a></li>
              <li><a href="#">Belts</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html">
        <div class="user-ava"><img src="img/account/user-ava-md.jpg" alt="Daniel Adams">
        </div>
        <div class="user-info">
          <h6 class="user-name">Daniel Adams</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div></a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="has-children"><span><a href="index.php"><span>Home</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="index.html">Featured Products Slider</a></li>
                <li><a href="home-featured-categories.html">Featured Categories</a></li>
                <li><a href="home-collection-showcase.html">Products Collection Showcase</a></li>
            </ul>
          </li>
          <li class="has-children active"><span><a href="shop-grid-ls.html"><span>Shop</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="shop-categories.html">Shop Categories</a></li>
              <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="shop-list-ls.html"><span>Shop List</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Loafers</a></li>
                  <li><a href="#">Boat Shoes</a></li>
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">Flats</a></li>
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Heels</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Jackets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Swimwear</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Handbags</a></li>
                  <li><a href="#">Backpacks</a></li>
                  <li><a href="#">Luggage</a></li>
                  <li><a href="#">Wallets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sunglasses</a></li>
                  <li><a href="#">Hats</a></li>
                  <li><a href="#">Watches</a></li>
                  <li><a href="#">Jewelry</a></li>
                  <li><a href="#">Belts</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="account-orders.html"><span>Account</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="account-login.php">Login / Register</a></li>
                <li><a href="account-password-recovery.html">Password Recovery</a></li>
                <li><a href="account-orders.html">Orders List</a></li>
                <li><a href="account-wishlist.html">Wishlist</a></li>
                <li><a href="account-profile.html">Profile Page</a></li>
                <li><a href="account-address.html">Contact / Shipping Address</a></li>
                <li><a href="account-open-ticket.html">Open Ticket</a></li>
                <li><a href="account-tickets.html">My Tickets</a></li>
                <li><a href="account-single-ticket.html">Single Ticket</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="blog-rs.html"><span>Blog</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="blog-rs.html"><span>Blog Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="blog-single-rs.html"><span>Single Post Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                    <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                    <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#"><span>Pages</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="mobile-app.html">Unishop Mobile App</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="order-tracking.html">Order Tracking</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
              <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="components/accordion.html"><span>Components</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="components/accordion.html">Accordion</a></li>
                <li><a href="components/alerts.html">Alerts</a></li>
                <li><a href="components/buttons.html">Buttons</a></li>
                <li><a href="components/cards.html">Cards</a></li>
                <li><a href="components/carousel.html">Carousel</a></li>
                <li><a href="components/countdown.html">Countdown</a></li>
                <li><a href="components/forms.html">Forms</a></li>
                <li><a href="components/gallery.html">Gallery</a></li>
                <li><a href="components/google-maps.html">Google Maps</a></li>
                <li><a href="components/images.html">Images &amp; Figures</a></li>
                <li><a href="components/list-group.html">List Group</a></li>
                <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                <li><a href="components/media.html">Media Object</a></li>
                <li><a href="components/modal.html">Modal</a></li>
                <li><a href="components/pagination.html">Pagination</a></li>
                <li><a href="components/pills.html">Pills</a></li>
                <li><a href="components/progress-bars.html">Progress Bars</a></li>
                <li><a href="components/shop-items.html">Shop Items</a></li>
                <li><a href="components/steps.html">Steps</a></li>
                <li><a href="components/tables.html">Tables</a></li>
                <li><a href="components/tabs.html">Tabs</a></li>
                <li><a href="components/team.html">Team</a></li>
                <li><a href="components/toasts.html">Toast Notifications</a></li>
                <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                <li><a href="components/typography.html">Typography</a></li>
                <li><a href="components/video-player.html">Video Player</a></li>
                <li><a href="components/widgets.html">Widgets</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
        <?php include 'header.php'?>
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Order Summary</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.php">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Order Summary</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
          <!-- Checkout Adress-->
          <div class="col-xl-9 col-lg-8">
          
            <h4>Review Your Order</h4>
            <hr class="padding-bottom-1x">
            <div class="table-responsive shopping-cart">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-right">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                            $sqlStatement = "SELECT * FROM cart_tbl JOIN customer_tbl ON cust_id = cart_cust_id JOIN product_tbl ON product_tbl.id = cart_prod_id WHERE cart_ispaid = 0 AND cart_cust_id = '$custid'";
                            if($osams->select($sqlStatement) != 0) {
                                foreach ($osams->select($sqlStatement) as $value) {
                                    ?>
                    <tr>
                        
                                    <td>
                                        <div class="product-item"><a class="product-thumb" href="shop-single.html"><img
                                                    src="img/product/<?php print $value['image'];?>" alt="Product"></a>
                                            <div class="product-info">
                                                <h4 class="product-title"><a href="shop-single.html"><?php print $value['prod_name'];?></a></h4>
                                               <span><em>Description:</em> <?php print $value['prod_desc'];?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center text-lg text-medium"><?php print $value['cart_qty'];?></td>
                                    <td class="text-lg text-medium text-right">&#8369; <?php print $value['cart_total'];?></td>
                                  
                                    
                    </tr>
                    <?php
                                }
                            }
                        ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Order Summary Widget-->
              <section class="widget widget-order-summary">
                <h3 class="widget-title">Payment Breakdown</h3>
                <table class="table">
                    <?php
                        $sqlStatement = "SELECT SUM(cart_total) AS 'Total', SUM(cart_total) * .12 AS 'Tax', SUM(cart_total) - SUM(cart_total) * .12 AS 'Subtotal' FROM cart_tbl JOIN product_tbl ON product_tbl.id = cart_prod_id WHERE cart_ispaid = 0 AND cart_cust_id = '$custid'";
                        if($osams->select($sqlStatement) != 0) {
                            foreach ($osams->select($sqlStatement) as $value) {
                                ?>
                                <tr>
                                    <td>Subtotal:</td>
                                    <td class="text-medium">&#8369; <?php print number_format($value['Subtotal'], 2) ?></td>
                                </tr>
                                <tr>
                                    <td>TAX</td>
                                    <td class="text-medium">&#8369; <?php print number_format($value['Tax'], 2) ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL</td>
                                    <td class="text-medium">&#8369; <?php print number_format($value['Total'], 2) ?></td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                </table>
              </section>
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

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-1/checkout-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 05:45:58 GMT -->
</html>