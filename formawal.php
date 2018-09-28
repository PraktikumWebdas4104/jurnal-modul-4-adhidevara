<form method="POST"> <h1>LOGIN</h1>
	<table>
		<tr>
			<td>USERNAME</td>
			<td>:</td>
			<td><input type="text" name="usr"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right"><input type="submit" name="submit" value="LOGIN"></td>
		</tr>
	</table>

<?php
	if (isset($_POST['submit'])) {
		$usr = $_POST['usr'];
		$pass = $_POST['pass'];

		$login = array('usr' => 'avara',
					   'pass' => 'avara');
		
		if ($usr==$login['usr'] && $pass==$login['pass']) {
			echo "<h1>LOGIN SUKSES</h1>";
?>

<form method="POST">
	<i><b>HOBI</b></i>
		<table>
			<tr>
				<td>CODING <input type="checkbox" name="hobi[]" value="coding"></td>
			</tr>
			<tr>
				<td>TRAVELING <input type="checkbox" name="hobi[]" value="traveling"></td>
			</tr>
			<tr>
				<td>GAMING <input type="checkbox" name="hobi[]" value="gaming"></td>
			</tr>
			<tr>
				<td>EDITING <input type="checkbox" name="hobi[]" value="editing"></td>
				<td><input type="submit" name="kirc" value="Check"></td>
			</tr>
		</table>
</form>

<?php
		}else{
			echo "<h1>LOGIN GAGAL</h1>";
		}
	}
		include 'proses.php';
?>
