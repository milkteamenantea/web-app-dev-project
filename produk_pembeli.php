<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      } else {
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
                <a class="nav-link mr-4" href="admin.php">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-4" href="daftar_produk.php">PRODUK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
              </li>
            </ul>
          </div>
        </div> 
      </nav>
    <!-- Akhir Navbar -->

    <!-- Produk -->
      <div class="container">
        <div class="row mt-3">
          <?php 
            include('koneksi.php');
            $query = mysqli_query($koneksi, 'SELECT * FROM produk');
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
          ?>
          <?php
            foreach($result as $result) :
          ?>
            <div class="col-md-3 mt-4">
              <div class="card brder-dark">
                <img src="upload/<?php echo $result['gambar_produk'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold"><?php echo $result['nama_produk'] ?></h5>
                <label class="card-text harga_produk"><strong>Rp.</strong> <?php echo number_format($result['harga_produk']); ?></label><br>
                  <a href="beli.php?id_produk=<?php echo $result['id_Produk']; ?>" class="btn btn-success btn-sm btn-block">BELI</a>
                </div>
              </div>
            </div>
          <?php
            endforeach;
          ?>
        </div> 
      </div>
    <!-- Akhir Produk -->
<?php
  include "footer.php";
?>
<?php } ?>