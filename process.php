<?php
include 'conn.php';
$proses = new database();

$aksi = $_GET['action'];

if ($aksi == "add") {
    $proses->tambah_karyawan($_POST['nmKaryawan'], $_POST['tglLahir'], $_POST['telp'], $_POST['alamat']);
    header("location: index.php");
}elseif ($aksi == "delete") {
    $proses->hapus_karyawan($_GET['id']);
    header("location: index.php");
}elseif ($aksi == "edit") {
    $proses->perbarui_karyawan($_POST['idKaryawan'], $_POST['nmKaryawan'], $_POST['tglLahir'], $_POST['telp'], $_POST['alamat']);
    header("location: index.php");
}

