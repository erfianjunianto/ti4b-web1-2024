<?php
$server = "localhost";
$user   = "root";
$pass   = "password";
$db     = "ti4b_web";

$conn = mysqli_connect($server,$user, $pass, $db);

// if($conn){
//     echo "Koneksi berhasil";
// }else{
//     echo "koneksi gagal ".die(mysqli_error($conn));
// }