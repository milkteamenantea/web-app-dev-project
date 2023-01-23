<?php
  //Include file koneksi ke database
  include "koneksi.php";

  //menerima nilai dari kiriman form pendaftaran
  $username       = $_POST["username"];
  $password       = $_POST["password"]; //untuk password digunakan enskripsi md5
  $status         = $_POST["status"];
  $nama_pelanggan = $_POST["nama_pelanggan"];
  $no_hp          = $_POST["no_hp"];
  $alamat         = $_POST["alamat"];

  //Menginput data ke tabel
    $hasil=mysqli_query($koneksi, "INSERT INTO pelanggan (username,password,status,nama_pelanggan,no_hp,alamat) VALUES('$username','$password','$status','$nama_pelanggan','$no_hp','$alamat')");

  //Kondisi apakah berhasil atau tidak
    if ($hasil) {
      echo "<script>
            alert('Anda Berhasil Registrasi !');
            document.location='login.php';
          </script>";
      }
      else 
      {
      echo "<script>
            alert('Registrasi Anda Gagal !');
            document.location='register.php';
          </script>";
    }
?>