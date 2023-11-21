<?php 
require_once 'koneksi.php';
$aktif = 'bukutamuint'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buku Tamu - <?= $title ?></title>
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
			<div class="col-md-4">
				<div class="title mb-3">
					Buku Tamu Internal
				</div>
				<div>
					<form method="POST" action="proses_bukutamuint.php">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" placeholder="Nama Anda" autocomplete="off" required="required" name="nama">
						</div>
						<div class="form-group">
							<label for="no_identitas">No Identitas</label>
							<input type="number"  class="form-control" id="no_identitas" placeholder="No Identitas Ktp/Lainnya" pattern="[0-9]*" autocomplete="off" required="required" name="no_identitas">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="Email" class="form-control" id="email" placeholder="email" autocomplete="off" required="required" name="email">
						</div>
						<div class="form-group">
							<label for="no_hp">No Handphone</label>
							<input type="number" class="form-control" id="no_hp" placeholder="No Handphone" autocomplete="off" pattern="[0-9]*" required="required" name="no_hp">
						</div>
						<div class="form-group">
							<label for="instansi">Instansi</label>
							<select class="form-control" id="instansi" required="required" name="instansi">
								<option value="Orang Tua dan Wali Murid">Orang Tua dan Wali Murid</option>
								<option value="Pengajar Tamu">Pengajar Tamu</option>
								<option value="Pejabat Pemerintah">Pejabat Pemerintah</option>
								<option value="Alumni">Alumni</option>
								<option value="Peneliti dan Akademisi">Peneliti dan Akademisi</option>
								<option value="TNI/POLRI">TNI/POLRI</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>
						<div class="form-group">
							<label for="subjek">Tujuan Kunjungan</label>
							<textarea name="subjek" class="form-control" rows="5" maxlength="500" placeholder="Tujuan Kunjungan"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
							<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin menghapus isian ini?')">Batal</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="title mb-3">
					Buku Tamu External
				</div>
				<div>
				<form method="POST" action="proses_bukutamuext.php">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" placeholder="Nama Anda" autocomplete="off" required="required" name="nama">
						</div>
						<div class="form-group">
							<label for="no_identitas">No Identitas</label>
							<input type="number"  class="form-control" id="no_identitas" placeholder="No Identitas Kartu Pelajar/Lainnya" pattern="[0-9]*" autocomplete="off" required="required" name="no_identitas">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="Email" class="form-control" id="email" placeholder="email" autocomplete="off" required="required" name="email">
						</div>
						<div class="form-group">
							<label for="no_hp">No Handphone</label>
							<input type="number" class="form-control" id="no_hp" placeholder="No Handphone" autocomplete="off" pattern="[0-9]*" required="required" name="no_hp">
						</div>
						<div class="form-group">
							<label for="hubungan">Hubungan Dengan Sekolah</label>
							<select class="form-control" id="hubungan" required="required" name="hubungan">
								<option value="Kepala Sekolah">Kepala Sekolah</option>
								<option value="Guru">Guru</option>
								<option value="Asitensi Mengajar">Asitensi Mengajar</option>
								<option value="Siswa">Siswa</option>
							</select>
						</div>
						<div class="form-group">
							<label for="subjek">Tujuan Kunjungan</label>
							<textarea name="subjek" class="form-control" rows="5" maxlength="500" placeholder="Tujuan Kunjungan"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
							<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin menghapus isian ini?')">Batal</button>
						</div>
					</form>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<?php require_once 'footer.php'; ?>