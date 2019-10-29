<html>
<head>
	<style>
		table {
  font-family: arial, sans-serif;
  text-align: center;
  border-collapse: collapse;
  width: 100%;
}
	h2 {
		font-family: arial, sans-serif;
		text-align: center;

	}
	</style>
</head>
<body>

	

<form action="TM_7hasil.php" method="post">
Name: <br><input type="text" name="name"><br>
Alamat : <br>
<textarea name="alamat"></textarea><br>
Jenis Kelamin : <br><input type="radio" name="jk" value="pria"> Pria 
	<input type="radio" name="jk" value="wanita">
Wanita <br>
Golongan Darah :<br>
<select name="goldar">
<option value="a">A</option>
<option value="b">B</option>
<option value="ab">AB</option>
<option value="o">O</option>

</select>
<br>
Hobby : <br><input type="checkbox" name="hobby[]" value="programming"> Programming <br>
<input type="checkbox" name="hobby[]" value="baca"> Membaca <br>
<input type="checkbox" name="hobby[]" value="Olahraga"> Olahraga <br>

Keterangan : <br>
<textarea name="ket"></textarea><br>

<input type="submit">
</form>

</body>
</html>