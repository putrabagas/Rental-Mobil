<!DOCTYPE html>
<html lang="en">

<head>
  <title>Car Rental</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a class="js-logo-clone">CAR RENTAL</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="carlist.php">Car List</a></li>
                <li class="has-children">
                  <a href="#">My Account</a>
                  <ul class="dropdown">
                    <li><a href="mybooking.php">My Booking</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                    
                  </ul>
                </li>            
              </ul>
            </nav>
          </div>
          <div class="icons">
            <?php   if (empty($_SESSION['username']))
              {?>
              <a href="login_user.php" class="icons-btn d-inline-block bag">
                <span class="icon-user"></span>
              </a>
            <?php } else { ?>
              <a href="mybooking.php" class="icons-btn d-inline-block bag">
                <span class="icon-user"></span>
              </a>
            <?php } ?>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Car List</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section" >
      <div class="container" >
          <div class="row" >
        <?php
          include "konek.php";
          $query = mysqli_query($conn, "SELECT * FROM mobil");
          while ($data = mysqli_fetch_array($query))
          {        
         
        ?>       
          
          
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.php?id_mobil=<?= $data ['id_mobil'];?>"><img src="admin/<?= $data['image']; ?>" alt="Image" width="100%" hegiht="100%"></a>
            <h3 class="text-dark"><a href="shop-single.php?id_mobil=<?= $data ['id_mobil'];?>"><b><?= $data['nama_mobil']; ?></b></a></h3>
            <p class="price">Rp <?= $data['harga_mobil']; ?> k/day</p>
          </div>
          
            <?php 		
                                            
			 
            }
		    ?>
        </div>
      </div>
    </div>

    
    


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Bali cheap cars its under Twins rental company based in Jalan Sahadewa Legian Bali. we are very gratefully to make our customer confident and being partner to your vacation and business in Bali.
              </p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>