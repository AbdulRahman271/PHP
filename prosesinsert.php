<?php

include "koneksi.php";

$no=$_POST["txtno"];
$nm=$_POST["txtnama"];
$kd=$_POST["txtkode"];
$jmlh=$_POST["txtjml"];

//proses
if($kd=="html"){

    $judul="Praktek bahasa pemrograman dengan html";
    $penerbit=" Andi Offset";
    $harga=85000;
}else if($kd=="css"){

    $judul="Desain web dengan css";
    $penerbit=" Andi Offset";
    $harga=35000;
}else if ($kd=="php"){

    $judul="Kupas tuntas PHP";
    $penerbit=" Maxicom";
    $harga=55000;
}else if($kd=="python"){

    $judul="Desain local host python";
    $penerbit=" Maxicom";
    $harga=45000;
}

$total= $harga*$jmlh;

$query="insert into tbtransaksi(notransaksi,Nama,Kode,Jumlah,Judul,Penerbit,Harga,TotalHarga)
 VALUES('$no','$nm','$kd','$jmlh','$judul','$penerbit','$harga','$total')";

mysqli_query($koneksi,$query);

if(mysqli_affected_rows($koneksi)>0){
    echo "<script> alert('Data Berhasil Disimpan'); location.href='form.php';</script>";

}else{
    echo "<script>alert('data Gagal disimpan'); windows.history.go(-1);</script>";
}


?>