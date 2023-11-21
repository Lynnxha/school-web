<?php 

require_once '../koneksi.php';
require_once 'cek_session.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_sejarah WHERE id = 1");
$sejarah_singkat = mysqli_fetch_assoc($query);
$active = 'sejarah_singkat'; 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sejarah Singkat - <?= $title; ?> </title>
	<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Sejarah Singkat <?= $title; ?>
							</div>
						</div>
					</div>
					<div class="card-body">
					<!-- <?= $sejarah_singkat['sejarah_singkat'] ?> -->
						<?php if(isset($_SESSION['sukses'])) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['sukses']) ?>
						<?php elseif(isset($_SESSION['gagal'])) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['gagal']) ?>
						<?php endif; ?>
						<form method="POST" action="proses_sejarah_singkat.php">
							<div class="form-group">
								<textarea name="sejarah_singkat" id="ckeditor" class="ckeditor form-control"><?= $sejarah_singkat['sejarah'] ?></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('apakah anda yakin?')" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../resources/js/jquery.js"></script>
	<script src="../resources/js/bootstrap.min.js"></script>
	<script src="../resources/ckeditor/ckeditor.js"></script>
</body>
</html>