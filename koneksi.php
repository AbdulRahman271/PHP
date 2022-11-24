<?php

// perintah koneksi

$koneksi =mysqli_connect("localhost","root","") or die ("koneksi gagal");

// memilih database 
 mysqli_select_db($koneksi,"dbpenjualan") or die ("database yang anda pilih Tidal ada");

?>