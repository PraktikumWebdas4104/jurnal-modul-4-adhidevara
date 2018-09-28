<?php
	if (isset($_POST['kirc'])) {
		$data = $_POST['hobi'];
		foreach ($data as $key) {
			echo $key."<br>";
		}
		$gbr = $_FILES['file']['name'];
		$move = move_uploaded_file($_FILES['file']['tmp_name'], 'gambar/'.$gbr);
		echo "<img src='$gbr' />";
	}
?>
