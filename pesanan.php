<?php 
  include('koneksi.php');
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
        <div class="judul-pesanan mt-5">
          <h3 class="text-center font-weight-bold">DATA PESANAN PELANGGAN</h3>
        </div>
        <table class="table table-bordered" id="example">
          <thead class="thead-light">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">ID Pembelian</th>
              <th scope="col">ID Produk</th>
              <th scope="col">ID Pelanggan</th>
              <th scope="col">Tanggal Pembelian</th>
              <th scope="col">Total Bayar</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor=1; ?>
            <?php 
              $ambil = mysqli_query($koneksi, 'SELECT * FROM pembelian');
              $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
            ?>
            <?php
              foreach($result as $result) :
            ?>
              <tr>
                <th scope="row"><?php echo $nomor; ?></th>
                <td><?php echo $result["id_pembelian"]; ?></td>
                <td><?php echo $result["id_pembelian"]; ?></td>
                <td><?php echo $result["id_pembelian"]; ?></td>
                <td><?php echo $result["tanggal_pembelian"]; ?></td>
                <td>Rp. <?php echo number_format($result["total_pembelian"]); ?></td>
                <td>
                  <a href="detail_pesanan.php?id=<?php echo $result['id_pembelian'] ?>" class="badge badge-primary">Detail</a>
                  <a href="delete_pesanan.php?id=<?php echo $result['id_pembelian'] ?>" class="badge badge-danger">Hapus Data</a>
                </td>
              </tr>
            <?php
              $nomor++;
            ?>
            <?php
              endforeach;
            ?>
          </tbody>
        </table>
      </div>
    <!-- Akhir Produk -->
    
    <!-- Awal Footer -->
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
            <div class="copyright" style="font-family: 'Century Gothic'; font-weight: bold;">
              <i class="far fa-copyright"></i> 2022 - PetsQu by fiamutiara</p>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
            <div class="icon-contact">
              <label class="font-weight-bold">Follow Us </label>
              <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
              <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
              <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
            </div>
          </div>
        </div>
      </div>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>
<?php
  }
?>