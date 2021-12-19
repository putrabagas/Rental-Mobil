<?php 
session_start();
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

            <a href="login_user.php" class="icons-btn d-inline-block bag">
              <span class="icon-user"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
              class="icon-menu"></span></a>
            </div>
          </div>
        </div>
      </div>
      
      <?php
      include "konek.php";
      $id_mobil = $_GET['id_mobil'];
      $query = mysqli_query($conn, "SELECT * FROM mobil WHERE id_mobil=$id_mobil");
      $data = mysqli_fetch_array($query);           
      $j = 1;
      ?>       

      <input type="hidden" name="id_mobil" value="<?= $id_mobil?>">
      <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="carlist.php">Car List</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?= $data['nama_mobil']; ?></strong></div>
            </div>
          </div>
        </div>

        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="col-md-5 mr-auto">
                <div class="border text-center">
                  <img src="admin/<?= $data ['image'];?>" alt="Image" class="img-fluid p-5">
                </div>
              </div>
              <div class="col-md-6">
                <h2 class="text-black"><?= $data ['nama_mobil'];?></h2>
                <p><?= $data ['des'];?></p>







                <div class="mt-5">
                  <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                      aria-controls="pills-home" aria-selected="true">Specifications</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                      aria-controls="pills-profile" aria-selected="false">Booking Information</a>
                    </li>

                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <table class="table custom-table">

                        <tbody>
                          <tr>
                            <td>Nama Mobil</td>
                            <td class="bg-light"><?= $data ['nama_mobil'];?></td>
                          </tr>
                          <tr>
                            <td>Kapasitas Penumpang</td>
                            <td class="bg-light"><?= $data ['penumpang'];?></td>
                          </tr>
                          <tr>
                            <td>Jenis Transmisi</td>
                            <td class="bg-light"><?= $data ['transmisi'];?></td>
                          </tr>
                          <tr>
                            <td>Harga/ Hari</td>
                            <td class="bg-light">Rp <?= $data ['harga_mobil'];?> k</td>
                          </tr>
                        </tbody>
                        
                      </table>

                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <div class="p-3 p-lg-5 border">
                        <form method="POST" action="proses_booking.php">
                          <input type="hidden" name="id_mobil" value="<?= $id_mobil?>">
                          <div class="row">
                            <div class="col-md-12">
                              <label for="email" class="text-black">Email<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                            </div>

                            <div class="col-md-12">
                              <label for="no_hp" class="text-black">Tanggal Peminjaman <span class="text-danger">*</span></label>
                              <input type="Date" class="form-control" id="fromdate" name="fromdate" placeholder="Tanggal Peminjaman">
                            </div>

                            <div class="col-md-12">
                              <label for="no_hp" class="text-black">Tanggal Pengembalian <span class="text-danger">*</span></label>
                              <input type="Date" class="form-control" id="todate" name="todate" placeholder="Tanggal Pengembalian">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="message" class="text-black">Pesan <span class="text-danger">*</label>
                              <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                              placeholder="Masukkan Pesan"></textarea>
                            </div>
                            <?php 	if (empty($_SESSION['username']))
                            {?>

                              <a href="login_user.php"   class="btn  btn-info btn-block col-md-12 ">Login For Book</a>
                            <?php } else { ?>
                              <div class="form-group">
                                <input type="submit" class="btn  btn-info btn-block col-md-12"  name="submit" value="Book Now">
                              </div>


                            <?php } ?>
                          </form>
                          </div>


                        </div>

                      </div>
                    </div>  

                  </div>
                </div>
              </div>
            </div>
          </form>    
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

    </php>