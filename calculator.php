<?php  
	// Nicolas Di Caterina
	// Version: 1.0
	// 4/6/18
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora con PHP</title>
</head>
<body>
	<form method="GET">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<select name="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<button>=</button>
	</form>

	<?php
		error_reporting(0);
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		$res = 0;
		$op = $_GET['op'];

		switch ($op) {
			case '+':
				$res = $num1 + $num2;
				echo $res;
				break;

			case '-':
				$res = $num1 - $num2;
				echo $res;
				break;

			case '*':
				$res = $num1 * $num2;
				echo $res;
				break;

			case '/':
				if ($num2 == 0) {
					echo "ERROR";
				}else{
					$res = $num1 / $num2;
					echo $res;
				}
				break;
		}
	?>
</body>
</html>

<?php  ?>