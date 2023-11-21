<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_sejarah WHERE id = 1");
$sejarah = mysqli_fetch_assoc($query);
$aktif = 'sejarah_singkat'; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sejarah Singkat - <?= $title ?></title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<link rel="shortcut icon" href="https://smkpgri3-malang.sch.id/websekolah/wp-content/uploads/2022/06/cropped-logo-smk-1-192x192.png" type="image/x-icon">
<body>			
		<!-- nav bar -->
		<?php require_once 'header.php'; ?>
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Sejarah Singkat <?= $title ?>
				</div>
				<div class="artikel">
					<?= $sejarah['sejarah'] ?>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<?php require_once 'footer.php'; ?>