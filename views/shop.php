<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shop List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="./public/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css">
    <link rel="stylesheet" href="./public/css/jquery-ui.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="./public/css/aos.css">

    <link rel="stylesheet" href="./public/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children active">
              <a href="home.php">Home</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li class="active"><a  href="shop.html">Shop</a></li>
            <li><a href="/add.php">Catalogue</a></li>
            <li><a href="/admin.php">Admin</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  
                
                </div>
              </div>
            </div>
            <div class="row mb-5">

            <div class="row mb-5">
            <?php foreach ($items as $item) {
              $itemName = $item['brand'];
              $itemDescription = $item['model'];
              $itemPrice = $item['price'];
              $itemImage = $item['image'];
              $itemId = $item['id']; // Assuming there's an 'id' column in the database table
            ?>
              <div class="col-sm-6 col-lg-4 mb-4 item" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="<?php echo $itemImage; ?>" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html"><?php echo $itemName; ?></a></h3>
                    <p class="mb-0"><?php echo $itemDescription; ?></p>
                    <p class="text-primary font-weight-bold">$<?php echo $itemPrice; ?></p>
                    <form action="add-to-cart.php" method="post">
                      <input type="hidden" name="itemId" value="<?php echo $itemId; ?>">
                      <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-3 order-1 mb-5 mb-md-0">
            

            </div> -->
          </div>
        </div>

        <div class="row">
          
        </div>
        
      </div>
    </div>

  </div>

  <script src="./public/js/jquery-3.3.1.min.js"></script>
  <script src="./public/js/jquery-ui.js"></script>
  <script src="./public/js/popper.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <script src="./public/js/owl.carousel.min.js"></script>
  <script src="./public/js/jquery.magnific-popup.min.js"></script>
  <script src="./public/js/aos.js"></script>

  <script src="./public/js/main.js"></script>
    
  </body>
</html>