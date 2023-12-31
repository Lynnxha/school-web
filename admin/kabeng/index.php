<?php 
require_once '../../koneksi.php';

$query = mysqli_query($koneksi, "SELECT id, nama, foto, no_hp, jabatan FROM tbl_kabeng");
$no = 1;
$active = 'master';
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
								Daftar Kabeng
							</div>
							<div class="float-right">
								<a href="tambah.php" class="btn btn-warning btn-sm"><i class="bx bx-plus"></i> Tambah</a>
							</div>
						</div>
					</div>
					<div class="card-body">
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
						<table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th width="50px">Foto</th>
						            <th>Nama</th>
						            <th>No HP</th>
						            <th>Jabatan</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						        <?php while($row = mysqli_fetch_assoc($query)) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><img src="../../images/guru/<?= $row['foto'] ?>" alt="" width="100%" class="img-thumbnail"></td>
										<td><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['nama'] ?></a></td>
										<td><?= $row['no_hp'] ?></td>
										<td><?= $row['jabatan'] ?></td>
										<td>
											<a href="ubah.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm"><i class='bx bx-edit'></i></a>
											<a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')"><i class='bx bx-trash'></i></a>
										</td>
									</tr>
								<?php endwhile; ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/datatables/datatables.min.js"></script>
	<script src="../../resources/datatables/datatable.js"></script>
</body>
</html>