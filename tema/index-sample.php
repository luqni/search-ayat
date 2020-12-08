<?php

require 'hitCounter.php';

$hit = new HitCounter();

echo '<h1>Hello world</h1>';
//cek dan simpan
$hit->Hitung();

//tampilkan counter
echo 'jumlah pengunjung :' . $hit->tampil();

//tampilkan history jika ada
$h = $hit->waktu();
if (!empty($h)) {
    echo '<br>Anda telah mengunjungi halaman ini pada : ' . $h;
}
