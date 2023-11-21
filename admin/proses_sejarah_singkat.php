<?php 

require_once '../koneksi.php';
require_once 'cek_session.php';
$sejarah = mysqli_real_escape_string($koneksi, isset($_POST['sejarah_singkat']) ? $_POST['sejarah_singkat'] : '');
$query = mysqli_query($koneksi, "UPDATE tbl_sejarah SET sejarah = '$sejarah' WHERE id = 1");

if($query){
	$_SESSION['sukses'] = 'Sejarah Singkat Berhasil Diubah!';
	header('Location: sejarah_singkat.php');
} else {
	$_SESSION['gagal'] = 'Sejarah Singkat Gagal Diubah!';
	header('Location: sejarah_singkat.php');
}