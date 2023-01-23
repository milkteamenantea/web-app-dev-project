<?php 
	include('koneksi.php');

	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$desc_produk = $_POST['desc_produk'];
	$stock_produk = $_POST['stock_produk'];
	$harga_produk = $_POST['harga_produk'];
	$nama_file = $_FILES['gambar_produk']['name'];
	$source = $_FILES['gambar_produk']['tmp_name'];
	$folder = './upload/';

	move_uploaded_file($source, $folder.$nama_file);
	$edit = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', desc_produk='$desc_produk', stock_produk='$stock_produk', harga_produk='$harga_produk', gambar_produk='$nama_file' WHERE id_produk='$id_produk' ");

	if($edit) 
		header('location: daftar_produk.php');
	else 
		echo "Edit Menu Gagal";
 ?>