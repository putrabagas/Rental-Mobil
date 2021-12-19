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
                <li><a href="carlist.php">Car List</a></li>
                <li class="has-children">
                  <a href="#">MY ACCOUNT</a>
                  <ul class="dropdown">
                    <li><a href="#">My Booking</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                    
                  </ul>
                </li>            
              </ul>
            </nav>
          </div>
          <div class="icons">
            
            <a href="login_user.php" class="icons-btn d-inline-block bag">
              <span class="icon-user"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url('hero_1.jpg');">
      <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h3 class="text-center">Login<br></h3>
              
              <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){ //jika login salah
                        echo "Login gagal! username dan password salah!";
                    }
                    if($_GET['pesan'] == "belumlogin"){ //jika login salah
                        echo "Login terlebih dahulu!";
                    }
                }
                ?>
              
            <form method="POST" action="proses_login.php" class="form-signin">
              <div class="form-label-group">
                    <input type="username" id="username" class="form-control" placeholder="Username" required autofocus name="username">
                    <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                    <input type="password" id="password"  class="form-control" placeholder="Password" required autofocus name="password">
                    <label for="inputPassword">Password</label>
              </div>

              
              <button type="submit" name="submit" class="btn btn-lg btn-info btn-block" type="submit" >Masuk</button>
                <br><h5 class="text-center" ><a href="regis.php">Registrasi</a></h5>
            </form>
          </div>
        </div>
      </div>
              </p>
            </div>
          </div>
        </div>
      </div>
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