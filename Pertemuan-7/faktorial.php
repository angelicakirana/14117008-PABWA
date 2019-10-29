
<html>
<head>
	<title></title>
</head>
<body>

<form action="#" method="post">
nilai : <br><input type="number" name="nilai"><br>

<input type="submit">
</form>


<?php

function faktorial($a){
	if($a==1){
		return 1;
	} else {
		return $hasil= $a*faktorial($a-1);
	}
	
}

$nilai=$_POST["nilai"];
$hasil = faktorial($nilai);

echo "nilai faktorial dari $nilai adalah : $hasil";
?>



</body>
</html>

