<?php
include 'classes/DatabaseHelper.php';
include 'classes/Osams.php';

$osams = new Osams();
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>OTOP | One Town One Product
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
      <!-- Page Content-->
      <!-- Main Slider-->
      <section class="hero-slider" style="background-image: url(img/hero-slider/main-bg.jpg);">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="img/hero-slider/2.png" alt="Puma">
                    <div class="h2 text-body text-normal mb-2 pt-1">Bracelets Collection</div>
                    <div class="h5 text-body text-normal mb-4 pb-1">from San Fernando, Pampanga</div>
                  </div>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/2.png" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-200 mb-4" src="img/hero-slider/6.png" alt="Converse">
                    <div class="h2 text-body text-normal mb-2 pt-1">Bayong Collection</div>
                    <div class="h5 text-body text-normal mb-4 pb-1">from Bacarra, Ilocos Norte</div>
                  </div>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/6.png" alt="Chuck Taylor All Star II"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block mb-4" src="img/hero-slider/9.png" style="width: 125px;" alt="Motorola">
                    <div class="h2 text-body text-normal mb-2 pt-1">Tumba-Tumba</div>
                    <div class="h5 text-body text-normal mb-4 pb-1">from Paete, Laguna</div>
                  </div>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/9.png" alt="Moto 360"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block mb-4" src="img/hero-slider/8.png" style="width: 125px;" alt="Motorola">
                    <div class="h2 text-body text-normal mb-2 pt-1">Luklukan</div>
                    <div class="h5 text-body text-normal mb-4 pb-1">form Badoc, Ilocos Norte</div>
                  </div>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/8.png" alt="Moto 360"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
     
      <!-- Featured Products Carousel-->
      <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Products</h3>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
          
          <?php
            $sqlStatement = "SELECT * FROM product_tbl LIMIT 8";
            foreach ($osams->select($sqlStatement) AS $val) {
          ?>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <a class="product-thumb" href="shop-single.html"><img src="../backend/uploads/<?php print $val["image"];?>" alt="Product" style="width: 100%;height: 200px;"></a>
              <h3 class="product-title"><a href="shop-single.html"><?php print $val["prod_name"];?></a></h3>
              <h4 class="product-price">&#8369; <?php print number_format($val["prod_price"], 2); ?></h4>
              
            </div>
          </div>
          <?php
            }
          ?>
        </div>
      </section>
      <!-- Product Widgets-->
     
      <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/07.png" alt="Dior"></div>
        </div>
      </section>
    
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

</html>