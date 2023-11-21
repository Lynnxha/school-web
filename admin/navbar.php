<?php
require_once 'cek_session.php';
$base_url = "http://localhost/schoolweb/";
?>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $base_url ?>" target="_blank">Lihat Website</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link <?= $active == 'artikel' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Artikel</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= $base_url ?>admin/kategori_artikel/">Data Kategori Artikel</a>
                <a class="dropdown-item" href="<?= $base_url ?>admin/artikel/">Data Artikel</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link <?= $active == 'master' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data Master</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= $base_url ?>admin/kabeng/">Data Kabeng</a>
                <a class="dropdown-item" href="<?= $base_url ?>admin/jurusan/">Data Jurusan</a>
                <a class="dropdown-item" href="<?= $base_url ?>admin/pengguna/">Data Pengguna</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $active == 'sejarah_singkat' ? 'active' : '' ?>" href="<?= $base_url ?>admin/sejarah_singkat.php">Sejarah Singkat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $active == 'bukutamu' ? 'active' : '' ?>" href="<?= $base_url ?>admin/bukutamu.php">Bukutamu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $active == 'tentang_website' ? 'active' : '' ?>" href="<?= $base_url ?>admin/tentang_website.php">Tentang Website</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= $base_url ?>admin/logout.php" onclick="return confirm('apakah anda yakin?')"><i class="bx bx-exit"></i></a>
        </li>
    </ul>
</nav>
