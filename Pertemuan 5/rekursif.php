<?php
	/*
	function tampilkanHaloDunia(){
		echo "Halo dunia!<br>";
		tampilkanHaloDunia();
	}
	tampilkanHaloDunia();
	*/

	function tampilanAngka(int $jumlah, int $index = 1){
		echo "Perulangan ke-{$index} <br>";

		if ($index < $jumlah) {
			tampilanAngka($jumlah, $index + 1);
		}
	}
	tampilanAngka(20);
?>