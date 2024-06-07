<?php

include("koneksi.php");

$query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id asc");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <h4>Daftar Anggota Perpustakaan ARS University</h4>
    <br>
    <a href="form_anggota.php">Tambah Data</a>
    <br><br>
    <table class="table table-primary">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

    <?php
    $no=1;
    while ($data = $query->fetch_object()) { //array
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$data->nama_lengkap;?></td>
            <td><?=$data->jenis_kelamin=='laki'?'Laki-Laki':'Perempuan';?></td>
            <td><?=$data->alamat;?></td>
            <td><?=$data->status=='1'?'Aktif':'Non Aktif';?></td>
            <td>
                <a href="form_edit_anggota.php?id=<?=$data->id;?>">Edit</a> |
                <a href="hapus_anggota.php?id=<?=$data->id;?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    
    <h4>Data Anggota 2</h4>
    <table class="table table-danger">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Laki-Laki</td>
            <td>Bandung</td>
            <td>Kawin</td>
            <td>Hapus</td>
        </tr>
        <tr>
            <td>2</td>
            <td>John Doe</td>
            <td>Laki-Laki</td>
            <td>Bandung</td>
            <td>Kawin</td>
            <td>Hapus</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John Doe</td>
            <td>Laki-Laki</td>
            <td>Bandung</td>
            <td>Kawin</td>
            <td>Hapus</td>
        </tr>
    </table>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


