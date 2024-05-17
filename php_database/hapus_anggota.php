<?php
include("koneksi.php");

$id = $_GET['id'];

$query = "DELETE FROM anggota WHERE id='$id'";

$delete = mysqli_query($conn, $query);

if($delete){
    echo 'berhasil hapus data, kembali ke <a href="anggota.php">Daftar Anggota</a>';
}else{
    echo 'gagal hapus data, kembali ke <a href="form_anggota.php">Form Anggota</a>';
}
?>