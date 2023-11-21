<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$query_kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori_artikel");
$query_artikel = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id = $id");
$artikel = mysqli_fetch_assoc($query_artikel);

$active = 'artikel'; 
?>

	<?php require_once '../header.php'; ?>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Ubah Artikel
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubah.php?id=<?= $artikel['id'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" value="<?= $artikel['judul'] ?>" class="form-control" id="judul" placeholder="judul artikel" autocomplete="off" required="required" name="judul">
							</div>
							<div class="form-group">
								<label for="id_kategori">Kategori Artikel</label>
								<select name="id_kategori" id="id_kategori" class="form-control">
									<?php while($kategori = mysqli_fetch_assoc($query_kategori)) : ?>
										<option value="<?= $kategori['id'] ?>" <?= $artikel['id_kategori'] == $kategori['id'] ? 'selected' : '' ?> ><?= $kategori['nama_kategori'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file mb-2" id="foto" placeholder="foto artikel" autocomplete="off" name="foto">
								*Gambar sebelumnya <br>
								<img src="../../images/artikel/<?= $artikel['foto'] ?>" alt="<?= $row['judul'] ?>" width="200px" class="mt-2">
							</div>
							<div class="form-group">
								<label for="isi">Isi</label>
								<textarea name="isi" id="ckeditor" class="ckeditor form-control">
									<?= $artikel['isi'] ?>
								</textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/ckeditor/ckeditor.js"></script>
</body>
</html>