<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
</head>
<body>
    <form action="data.php" method="post">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama_lengkap">

        <br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="j_kelamin" value="laki"> Laki-Laki
        <input type="radio" name="j_kelamin" value="wanita"> Perempuan

        <br>
        <label>Kabupaten/Kota:</label>
        <select name="kota">
            <option value="1">Kota Bandung</option>
            <option value="2">Bandung</option>
            <option value="3">Kabupaten Bandung Barat</option>
            <option value="4">Kota Cimahi</option>
        </select>

        <br>
        <label>Alamat:</label><br>
        <textarea name="alamat" cols="30" rows="10"></textarea>

        <br>
        <input type="submit" value="Kirim">

    </form>
</body>
</html>
