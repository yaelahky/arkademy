<hl> Bilangan Prima 1-37 </br></br></h1>
	<?php

		$max = 37;
		$deteksi = 0;
		
		//loop mulai mencari prima
		for ($i = 2; $i <= $max; $i++) {
		$isPrime = true;
		
		//menolak bukan prima 
		for ($j = 2; $j < $i; $j++){
			if ($i%$j == 0) {
			$isPrime = false;
			}
		}
		//mengngeluarkan bilangan prima
		if ($isPrime == true){
		echo $i . ",";
		//mengambil deteksi sudah berapa loop yang berjalan, jika tiga kali maka keluar enter
		if (++$deteksi%3 == 0)
		echo "<br />";
		}
		}
	?>