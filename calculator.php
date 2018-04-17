<?php  
	// Nicolas Di Caterina
	// Version: 1.0
	// 4/6/18
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<title>PHP calculator</title>
</head>
<body>
	<!--
	<form method="POST">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<select name="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<button class="btn btn-primary">=</button>
	</form>
	-->
	<br>
	<form class="container">
	  <div class="form-group">
	    <label for="formGroupExampleInput">Insert a number</label>
	    <input type="number" class="form-control" id="formGroupInput" placeholder="Example: 2">
	  </div>
	  <div class="form-group">
	    <label for="formGroupExampleInput2">Insert another number</label>
	    <input type="number" class="form-control" id="formGroupInput2" placeholder="Example: 3">
	  </div>
	  
	  <center><button type="submit" class="btn btn-primary">=</button></center>
	</form>

	<?php
		error_reporting(0);
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$res = 0;
		$op = $_POST['op'];

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
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</body>
</html>

<?php  
?>