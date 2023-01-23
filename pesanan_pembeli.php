<?php  
  include('koneksi.php');
  session_start();
  
  if(!isset($_SESSION['login_user'])) {
    header("location: login.php");
  } else {
?>
<?php 
  if(empty($_SESSION["pesanan"]) OR !isset($_SESSION["pesanan"])) {
    echo "<script>alert('Pesanan kosong, Silahkan Pesan dahulu');</script>";
    echo "<script>location= 'produk_pembeli.php'</script>";
  }
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
          <h3 class="text-center font-weight-bold">PESANAN ANDA</h3>
        </div>
        <table class="table table-bordered" id="example">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pesanan</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Subharga</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
              <?php $nomor=1; ?>
              <?php $totalbelanja = 0; ?>
              <?php foreach ($_SESSION["pesanan"] as $id_produk => $jumlah) : ?>

              <?php 
                include('koneksi.php');
                $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
                $pecah = $ambil -> fetch_assoc();
                $subharga = $pecah["harga_produk"]*$jumlah;
              ?>
            <tr>
              <td><?php echo $nomor; ?></td>
              <td><?php echo $pecah["nama_produk"]; ?></td>
              <td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
              <td><?php echo $jumlah; ?></td>
              <td>Rp. <?php echo number_format($subharga); ?></td>
              <td>
                <a href="hapus_pesanan.php?id_produk=<?php echo $id_produk ?>" class="badge badge-danger">Hapus</a>
              </td>
            </tr>
              <?php $nomor++; ?>
              <?php $total_pembelian+=$subharga; ?>
              <?php endforeach ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4">Total Belanja</th>
              <th colspan="2">Rp. <?php echo number_format($total_pembelian) ?></th>
            </tr>
          </tfoot>
        </table><br>
        <form method="POST" action="">
          <a href="produk_pembeli.php" class="btn btn-primary btn-sm">Lihat Menu</a>
          <button class="btn btn-success btn-sm" name="konfirm">Konfirmasi Pesanan</button>
        </form>        

        <?php 
          if(isset($_POST['konfirm'])) {
            $tanggal_pembelian=date("Y-m-d");

            // Menyimpan data ke tabel pemesanan
            $insert = mysqli_query($koneksi, "INSERT INTO pembelian (tanggal_pembelian, total_pembelian) VALUES ('$tanggal_pemesanan', '$total_pembelian')");

            // Mendapatkan ID barusan
            $id_terbaru = $koneksi->insert_id;

            // Menyimpan data ke tabel pemesanan produk
            foreach ($_SESSION["pesanan"] as $id_produk => $jumlah)
            {
              $insert = mysqli_query($koneksi, "INSERT INTO pembelian_produk (id_pembelian, id_produk, jumlah) 
                VALUES ('$id_terbaru', '$id_produk', '$jumlah') ");
            }          

            // Mengosongkan pesanan
            unset($_SESSION["pesanan"]);

            // Dialihkan ke halaman nota
            echo "<script>alert('Pemesanan Sukses!');</script>";
            echo "<script>location= 'produk_pembeli.php'</script>";
          }
        ?>
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
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>
<?php } ?>