<?php  
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">

    <title>PetsQu Shop</title>
    <link rel="shortcut icon" href="images/Screenshot 2022-06-30 023041.png">
  </head>
  <body>
    <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
        </div>
      </div>
    <!-- Akhir Jumbotron -->

    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg" style="background: #ffe69a;">
        <div class="container">
          <a class="navbar-brand" href="beranda.php" style="color: black;"><strong>PetsQu</strong> Shop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link mr-4" href="user.php">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-4" href="produk_pembeli.php">PRODUK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-4" href="beranda.php">LOGOUT</a>
              </li>
            </ul>
          </div>
        </div> 
      </nav>
    <!-- Akhir Navbar -->

    <!-- Bagian Isi -->    
    <div class="container">
        <div class="judul text-center mt-5">
          <h3 class="font-weight-bold" style="font-family: 'Calibri'; font-size: 25px;">PetsQu Store</h3>
          <h5 style="font-family: 'Calibri'; font-size: 20px;">Jagakarsa, Jakarta Selatan
          <br style="font-family: 'Calibri'; font-size: 20px;">Buka Jam <strong>08.00 - 22.00</strong></h5>
        </div>

        <div class="row workingspace">
          <div class="col-lg-5">
            <img src="images/4ebe8133d5faef826924b6cf2d444a5c.png" class="img-fluid">
          </div>
          <div class="col-lg-7">
            <h3>Yuk, Kenal Lebih Dekat dengan<span> PetsQu!</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisl rhoncus lorem ultrices dignissim sed id dui. Curabitur venenatis ex at velit finibus scelerisque. Nullam dui nibh, rutrum in nulla at, condimentum pretium mi. Nunc viverra nunc eget elementum bibendum. Aenean sed elementum elit. In convallis tortor felis, ut mollis ipsum finibus eu.</p>
            <a href="" class="btn btn-warning tombol">More</a>
          </div>
        </div>
      </div>
   
      <section class="testi py-5" id="page4" style="background-color: #ffd24c; margin-top: 100px;">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h1 class="display-4" style="color: black; font-family: 'Calibri'; text-shadow: 3px 1px 2px #987409; font-style: italic;"><b>Kata Mereka...</b></h1>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <hr>
            </div>
          </div>
          <div class="container1" style="margin-top: 70px;">
          <div class="row">
            <div class="col">
              <div class="card" style="width: 20rem; border-radius: 20px;" >
                <img src="images/IMG20211117215130.jpg" class="card-img-top img-fluid rounded-circle" style="width: 200px; margin: -50px 60px 8px;" alt="">
                <div class="card-body text-justify">
                  <p class="namecoment" style="font-family: 'Calibri'; font-size: 30px; font-weight: bold; text-align: center;">Nanazhima</p>
                  <div class="stars1" style="margin: -20px 84px 15px; color: #f0b70d;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <p class="coment" style="font-family: 'Century Gothic'; font-size: 12px; font-style: italic;"><sup><i class="fa fa-quote-left"></i></sup>&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&emsp;<sup><i class="fa fa-quote-right"></i></sup></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 20rem; border-radius: 20px;">
                <img src="images/IMG20210329235743.jpg" class="card-img-top img-fluid rounded-circle" style="width: 200px; margin: -50px 60px 8px;" alt="">
                <div class="card-body text-justify">
                  <p class="namecoment" style="font-family: 'Calibri'; font-size: 30px; font-weight: bold; text-align: center;">Krystal</p>
                  <div class="stars2" style="margin: -20px 100px 15px; color: #f0b70d;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <p class="coment" style="font-family: 'Century Gothic'; font-size: 12px; font-style: italic;"><sup><i class="fa fa-quote-left"></i></sup>&emsp;Lorem ipsum dolor sit amet, consectetur aipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&emsp;<sup><i class="fa fa-quote-right"></i></sup></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 20rem; border-radius: 20px;">
                <img src="images/IMG-20220505-WA0012.jpg" class="card-img-top img-fluid rounded-circle" style="width: 200px; margin: -50px 60px 8px;" alt="">
                <div class="card-body text-justify">
                  <p class="namecoment" style="font-family: 'Calibri'; font-size: 30px; font-weight: bold; text-align: center;">Summer Soul</p>
                  <div class="stars3" style="margin: -20px 90px 15px; color: #f0b70d;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <p class="coment" style="font-family: 'Century Gothic'; font-size: 12px; font-style: italic;"><sup><i class="fa fa-quote-left"></i></sup>&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&emsp;<sup><i class="fa fa-quote-right"></i></sup></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Bagian Isi-->
<?php 
  }
?>
<?php
  include "footer.php";
?>