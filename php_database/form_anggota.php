<form action="proses_tambah_data.php" method="post">
    <label for="">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" value="" placeholder="Masukkan nama lengkap Anggota">

    <br>

    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" value="laki"> Laki-Laki 
    <input type="radio" name="jenis_kelamin" value="wanita"> Perempuan

    <br>

    <label for="">Alamat</label>
    <textarea name="alamat" cols="30" rows="10"></textarea>

    <br>
    <button type="submit">Proses</button>

</form>