<?php
# get data from table anggota where id = get id

include("koneksi.php");

$id = $_GET['id'];

$query = "SELECT * FROM anggota WHERE id=$id";

$data = mysqli_query($conn, $query);
while($list = $data->fetch_object()){
    $nama_lengkap = $list->nama_lengkap;
    $jenis_kelamin = $list->jenis_kelamin;
    $alamat = $list->alamat;
    $status = $list->status;
}


?>

<form action="update_anggota.php" method="post">
    <input type="hidden" name="id" value="<?=$id;?>">
    <label for="">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" value="<?=$nama_lengkap;?>" placeholder="Masukkan nama lengkap Anggota">

    <br>

    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" value="laki"   <?=$jenis_kelamin=='laki'?'checked':''?> > Laki-Laki 
    <input type="radio" name="jenis_kelamin" value="wanita" <?=$jenis_kelamin=='wanita'?'checked':''?> > Perempuan

    <br>

    <label for="">Alamat</label>
    <textarea name="alamat" cols="30" rows="10"><?=$alamat;?></textarea>

    <br>

    <label>Status</label>
    <select name="status">
        <option value="1" <?=$status=='1'?'selected':'';?> >Aktif</option>
        <option value="2" <?=$status=='2'?'selected':'';?> >Non Aktif</option>
    </select>

    <br>
    <button type="submit">Update</button>

</form>

Kembali ke <a href="anggota.php">Daftar Anggota</a>