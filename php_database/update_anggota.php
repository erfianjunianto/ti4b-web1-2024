<?php

include("koneksi.php");
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];


#insert ke database

$query = ("UPDATE anggota SET 
nama_lengkap='$nama_lengkap', 
jenis_kelamin='$jenis_kelamin', 
alamat='$alamat',
status='$status'
WHERE id='$id'");

$update = mysqli_query($conn, $query);

if($update){
    echo 'berhasil ubah data, kembali ke <a href="anggota.php">Daftar Anggota</a>';
}else{
    echo 'gagal ubah data, kembali ke <a href="form_anggota.php">Form Anggota</a>';
}