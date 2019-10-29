
<html>
<head>
	<title></title>
</head>
<body>


<form action="#" method="post">
Nama: <br><input type="text" name="name"><br>
Warna : <br><input type="text" name="warna"><br>
<input type="submit">
</form>

<?php 


	$nama = $_POST["name"];
	$warna = $_POST["warna"];
	

	$jumkar = strlen($nama);

	$harga=0;
	if($jumkar<10 && $jumkar>0){
		$harga= $jumkar*300;
	} elseif ($jumkar<20 && $jumkar>11) {
		$harga= $jumkar*500;
	} else {
		$harga= $jumkar*700;
	}
	
	if(!empty($warna)){
		if($warna=="merah"){
			echo "<p> <font color=red> nama : $nama<br>harga : $harga </font></p>";
		} elseif ($warna=="hijau") {
			echo "<p> <font color=green> $nama<br>harga : $harga </font></p>";
		} elseif ($warna=="hitam") {
			echo "<p> <font color=black> $nama<br>harga : $harga </font></p>";
		} elseif ($warna=="kuning") {
			echo "<p> <font color=yellow> $nama<br>harga : $harga </font></p>";
		}
	} else {
		echo "<p> <font color=red> $nama<br>harga : $harga </font></p>";
	}



?>
		


</body>
</html>


