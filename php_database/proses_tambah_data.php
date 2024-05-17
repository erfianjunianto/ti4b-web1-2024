<?php

include("koneksi.php");

$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

#insert ke database

$query = ("INSERT INTO anggota (nama_lengkap, jenis_kelamin, alamat) VALUES ('$nama_lengkap','$jenis_kelamin','$alamat')");

$insert = mysqli_query($conn, $query);

if($insert){
    echo 'berhasil input data, kembali ke <a href="anggota.php">Daftar Anggota</a>';
}else{
    echo 'gagal input data, kembali ke <a href="form_anggota.php">Form Anggota</a>';
}