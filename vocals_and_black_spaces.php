<?php
	// Nicolas Di Caterina
	// Version: 1.0
	// 4/16/18
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vocals and blank spaces</title>
</head>
<body>
	<form method="GET">
		<input type="text" name="vocals" title="Words to delete all vocals" placeholder="Input words"><br>
		<br>
		<input type="text" name="blank_spaces" title="Words to delete all blank spaces" placeholder="Input words"><br>
		<br>
		<button>SUBMIT</button><br>

		<?php
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
			// Given a string, delete all vocals, and show the result
			$words = $_GET['vocals'];

			// For ends by $words length
			for ($i=0; $i < strlen($words); $i++) {
				// If the char is a vocal, replace it by a blank char, and rest $i by 1, to mantain correct order
				if (substr($words, $i, 1) == 'a' || substr($words, $i, 1) == 'e' || substr($words, $i, 1) == 'i' || substr($words, $i, 1) == 'o' || substr($words, $i, 1) == 'u') {
				$words = substr_replace($words, '', $i, 1);
				$i=-1;
				}
			}
			// Show $word without vocals
			echo $words."<br>";

			// Delete all blank spaces on a String
			$words = $_GET['blank_spaces'];

			for ($i=0; $i < strlen($words); $i++) { 
				if (substr($words, $i, 1) == ' ') {
					$words = substr_replace($words, '', $i, 1);
				}
			}

			echo $words;
		?>
	</form>
</body>
</html>
<?php 

?>