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
$instansi = mysqli_real_escape_string($koneksi, $_POST['instansi']);
$tujuan = mysqli_real_escape_string($koneksi, $_POST['subjek']);
    
$query = mysqli_query($koneksi, "INSERT INTO tbl_bukutamuint (tgl_kunjung, nama, no_identitas, email, no_hp, instansi, subjek) VALUES ('$tanggal', '$nama', '$noidentitas', '$email', '$nohp', '$instansi', '$tujuan')");

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
