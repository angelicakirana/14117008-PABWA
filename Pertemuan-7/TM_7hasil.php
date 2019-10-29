<?php

$nama = $_POST["name"];
$alamat = $_POST["alamat"];
$jeniskel = $_POST["jk"];
$goldar = $_POST["goldar"];
$keterangan = $_POST["ket"];


if(empty($nama)){
echo "nama harus diisi";

} else {
	echo "Nama : $nama <br>";
	echo "alamat : $alamat <br>";
	echo "jenis kelamin : $jeniskel <br>";
	

	if(!empty($_POST['hobby'])) {
// Counting number of checked checkboxes.
// $checked_count = count($_POST['hobby']);
echo "Hobby yang dipilih adalah : <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['hobby'] as $selected) {
echo "$selected <br>";
}


echo "Keterangan : $keterangan";

}
}

?>