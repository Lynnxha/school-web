<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_tentang_website WHERE id = 1");
$tentang_website = mysqli_fetch_assoc($query);
$aktif = 'tentang_website'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tentang Website - <?= $title ?></title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<link rel="shortcut icon" href="https://smkpgri3-malang.sch.id/websekolah/wp-content/uploads/2022/06/cropped-logo-smk-1-192x192.png" type="image/x-icon">
</head>
<body>
		<?php require_once 'header.php' ?>	
		
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>
	
		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Tentang Website <?= $title ?>
				</div>
				<div class="artikel">
					<?= $tentang_website['tentang_website'] ?>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<?php require_once 'footer.php'; ?>