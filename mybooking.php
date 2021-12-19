<?php 
    session_start();
if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
}
?>

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
                  <a href="#">My Account</a>
                  <ul class="dropdown">
                    <li><a href="#">My Booking</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                    
                  </ul>
                </li>            
              </ul>
            </nav>
          </div>
          <div class="icons">
            
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">My Booking</strong></div>
        </div>
      </div>
    </div>

<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Vehicle</th>
                      <th>From Date</th>
                      <th>To Date</th>
                      <th>Message</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <?php
          include "konek.php";
          $username =$_SESSION['username'];
          $query = mysqli_query($conn, "SELECT a.*,b.* FROM pemesanan a,mobil b WHERE a.id_mobil=b.id_mobil and a.username='$username'");
          while ($data = mysqli_fetch_array($query))
          {        
         
        ?>   
                  <tbody>
                    <tr>
                      <td><img src="<?= $data ['image'];?>" alt="Image" class="img-fluid p-5"></td>
                      <td><?= $data['fromdate']; ?></td>
                      <td><?= $data['todate']; ?></td>
                      <td><?= $data['message']; ?></td>
                      <td><?php
                            
                            if($data['status']==0){
                                
                                echo "Not Confirmed";
                            
                            }
              
                            else if($data['status']==1)
                            
                            {
                                
                                echo "Confirmed";
                            
                            }
              
                            else
                                
                            {
                                
                                echo "Cancelled";
                            
                            }
                    
                          ?>
                          
                        
                        </td>
                    <?php
          }
                    ?>
                    
                    
                  </tbody>
                </table>
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