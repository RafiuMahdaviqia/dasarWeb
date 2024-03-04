<?php
// Percobaan 1
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf: D";
}

// Percobaan 2
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 Kilometer.";
echo "<br>";

// Percobaan 3
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br>";

// Percobaan 4
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor Ujian adalah: $totalSkor";
echo "<br>";

// Percobaan 5
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

// Percobaan 6
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79];
$totalNilai = 0;
$jumlahSiswa = count($nilaiSiswa);

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 60) {
        echo "Nilai: $nilai (Lulus) <br>";
    } else {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
    }
}

foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai;
}

$rataRata = $totalNilai / $jumlahSiswa;
echo "Rata - rata nilai Siswa adalah : " . $rataRata;
echo "<br>";

// Percobaan 7
echo "<br>";
$hargaProduk = 120000;
if ($hargaProduk > 100000) {
    $diskon = 0.2 * $hargaProduk;
} else {
    $diskon = 0;
}

$hargaDibayar = $hargaProduk - $diskon;
echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaDibayar, 0, ',', '.');
echo "<br>";

// Percobaan 8
$skorPemain = 750;
echo "Total skor pemain adalah: " . $skorPemain . "<br>";
$hadiahTambahan = ($skorPemain > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
