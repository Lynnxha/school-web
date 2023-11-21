<?php
require_once 'koneksi.php';

if (!isset($_POST['kirim'])) {
    header('Location: bukutamu.php');
}

$tanggal = date('Y-m-d H:i:s');
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$noidentitas = mysqli_real_escape_string($koneksi, $_POST['no_identitas']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$nohp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$hubungan = mysqli_real_escape_string($koneksi, $_POST['hubungan']);
$tujuan = mysqli_real_escape_string($koneksi, $_POST['subjek']);

$query = mysqli_query($koneksi, "INSERT INTO tbl_bukutamuext (tgl_kunjung, nama, no_identitas, email, no_hp, hubungan, subjek) VALUES ('$tanggal', '$nama', '$noidentitas', '$email', '$nohp', '$hubungan', '$tujuan')");

if ($query) {
    ?>
    <script>
        alert('Terkirim!');
        document.location.href = 'bukutamu.php';
    </script>
    <?php
} else {
    ?>
    <script>
        alert('Gagal Terkirim!');
        document.location.href = 'bukutamu.php';
    </script>
    <?php
}
?>
