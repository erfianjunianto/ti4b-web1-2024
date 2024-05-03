<?php
/*
if(kondisi){ //true
    Statement True;
}else{
    Statement False;
}


if(kondisi 1){ //true
    Statement 1;
}else
if(kondisi 2){ //true{
    Statement 2;
}else
if(kondisi 3){ //true{
    Statement 3;
}else{
    Statement False;
}

if(kondisi 1){ //true
    if(sub kondisi 1){
        statement sub kondisi 1 true;
    }else{
        statement sub kondisi 1 false;
    }
}else
if(kondisi 2){ //true{
    if(sub kondisi 2){
        statement sub kondisi 2 true;
    }else{
        statement sub kondisi 2 false;
    }
}else{
    Statement False;
}

*/

echo "<pre>";
    echo "Nama Lengkap: ".$_POST['nama_lengkap']."<br>";
    echo "Jenis Kelamin: ".($_POST['j_kelamin']=='l'?'Laki-Laki':'Perempuan')."<br>";
    if($_POST['kota']=='1'){
        echo "Kota Asal : Kota Bandung <br>";
    }else
    if($_POST['kota']=='2'){
        echo "Kota Asal : Kab. Bandung <br>";
    }else
    if($_POST['kota']=='3'){
        echo "Kota Asal : Kab. Bandung Barat <br>";
    }else
    if($_POST['kota']=='4'){
        echo "Kota Asal : Kota Cimahi <br>";
    }else{
        echo "Kota Asal : - <br>";
    }
    echo "Alamat: ".$_POST['alamat']."<br>";
echo "</pre>";
?>