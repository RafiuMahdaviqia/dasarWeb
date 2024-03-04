<?php
// Percobaan 1
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
// Percobaan 2
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
// Percobaan 3
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;


echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";
echo "<br>";

echo "Hasil Sama: " . ($hasilSama ? "True" : "False") . "<br>";
echo "Hasil Tidak Sama: " . ($hasilTidakSama ? "True" : "False") . "<br>";
echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? "True" : "False") . "<br>";
echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? "True" : "False") . "<br>";
echo "Hasil Lebih Kecil Sama: " . ($hasilLebihKecilSama ? "True" : "False") . "<br>";
echo "Hasil Lebih Besar Sama: " . ($hasilLebihBesarSama ? "True" : "False") . "<br>";
echo "<br>";

echo "Operasi Logika: <br>";
echo "Hasil AND: " . ($hasilAnd ? "True" : "False") . "<br>";
echo "Hasil OR: " . ($hasilOr ? "True" : "False") . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? "True" : "False") . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? "True" : "False") . "<br>";
echo "<br>";

// Percobaan 4
$a = 10;
$b = 5;

$a += $b;
echo $a . "<br>";

$a -= $b;
echo $a . "<br>";

$a *= $b;
echo $a . "<br>";

$a /= $b;
echo $a . "<br>";

$a %= $b;
echo $a . "<br>";
echo "<br>";

// Percobaan 5
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

var_dump($hasilIdentik);
echo "<br>";
var_dump($hasilTidakIdentik);
echo "<br>";
echo "<br>";

// Percobaan 6
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;
echo "Jumlah kursi kosong di restoran: " . $kursiKosong . "<br>";
echo "Persentase kursi kosong di restoran: " . $persentaseKursiKosong . "%";
