<?php
$nama = @$_GET['nama']; // @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia']; // @ agar tidak ada peringatan error ketika key-nya kosong
echo "Halo {$nama}! Apakah benar ada berusia {$usia} tahun?";
