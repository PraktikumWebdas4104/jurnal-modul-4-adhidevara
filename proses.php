<?php
	if (isset($_POST['kirc'])) {
		$data = $_POST['hobi'];
		foreach ($data as $key) {
			echo $key."<br>";
		}
	}
?>
