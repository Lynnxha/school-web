<?php

if (!isset($_POST['ubah'])) {
    header('Location: ubah.php');
}

require_once '../../koneksi.php';

$judul = mysqli_real_escape_string($koneksi, isset($_POST['judul']) ? $_POST['judul'] : '');
$id_kategori = mysqli_real_escape_string($koneksi, isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '');
$isi = mysqli_real_escape_string($koneksi, isset($_POST['isi']) ? $_POST['isi'] : '');
$tanggal = date('Ymd');
$id = $_GET['id'];

// Define the destination folder for file uploads
$tujuan = '../../images/artikel/';

if ($_FILES['foto']['error'] == 0) {
    // Handle file upload
    $ekstensi = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

    $nama_foto = $tanggal . '-' . strtolower($judul) . '.' . $ekstensi;
    $asal = $_FILES['foto']['tmp_name'];

    // Delete the previous file if it exists
    $query_artikel = mysqli_query($koneksi, "SELECT foto FROM tbl_artikel WHERE id = $id");
    if ($query_artikel && $row = mysqli_fetch_assoc($query_artikel)) {
        if (!empty($row['foto'])) {
            $previous_file = $tujuan . $row['foto'];
            if (file_exists($previous_file) && is_file($previous_file)) {
                unlink($previous_file);
            }
        }
    }

    // Move the uploaded file to the destination folder
    if (move_uploaded_file($asal, $tujuan . $nama_foto)) {
        // Update the data
        $query = mysqli_query($koneksi, "UPDATE tbl_artikel SET judul = '$judul', id_kategori = '$id_kategori', isi = '$isi', foto = '$nama_foto' WHERE id = $id");
        if ($query) {
            $_SESSION['sukses'] = 'Data Berhasil Diubah!';
            header('Location: index.php');
        } else {
            $_SESSION['gagal'] = 'Data Gagal Diubah!';
            header('Location: index.php');
        }
    } else {
        $_SESSION['gagal'] = 'Gagal upload foto';
        header('Location: index.php');
    }
} else {
    // Handle the case where no new file is uploaded
    $query = mysqli_query($koneksi, "UPDATE tbl_artikel SET judul = '$judul', id_kategori = '$id_kategori', isi = '$isi' WHERE id = $id");
    if ($query) {
        $_SESSION['sukses'] = 'Data Berhasil Diubah!';
        header('Location: index.php');
    } else {
        $_SESSION['gagal'] = 'Data Gagal Diubah!';
        header('Location: index.php');
    }
}
?>
