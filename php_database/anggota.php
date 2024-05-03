<?php

include("koneksi.php");

$query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id asc");

while ($data = $query->fetch_object()) {
    echo "Nama Lengkap: ".$data->nama_lengkap."<br>";
}