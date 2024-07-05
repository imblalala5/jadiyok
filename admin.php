<?php
// Membaca dan menampilkan isi file orders.txt
$pesanan = file_get_contents('pesanan.txt');
echo "<h1>Daftar Pesanan</h1>";
echo nl2br($pesanan);
?>
