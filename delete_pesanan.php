<?php 
	include('koneksi.php');
	$id = $_GET['id'];
	$hapus= mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_pembelian='$id'");

	if($hapus)
		header('location: pesanan.php');
	else 
      echo "Hapus data gagal";
?>