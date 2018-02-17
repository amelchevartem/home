<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	
	<h1>Calculate</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label for="firnum">Input first number:</label>
				<input type="text" class="form-control" placeholder="Enter number" name="firstnumber" id="firnum"> 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="class-group">
				<label for="secnum">Input second number:</label> 
				<input type="text" class="form-control" placeholder="Enter number" name="secondnumber" id="secnum">
			</div>
		</div>
	</div>
	<br>	
	<button type="submit" class="btn btn-success" name="plus">+</button>
	<button type="submit" class="btn btn-success" name="minus">-</button>
	<button type="submit" class="btn btn-success" name="multiply">*</button>
	<button type="submit" class="btn btn-success" name="divide">/</button>
	</form>
	<br>
<?php
	$firstnum = $_POST['firstnumber'];
	$secondnum = $_POST['secondnumber'];
	$res = "";

	if (isset($_POST['plus'])) {
		$res = $firstnum + $secondnum;
		echo $res;
	} elseif (isset($_POST['minus'])) {
		$res = $firstnum - $secondnum;
		echo $res;
	} elseif (isset($_POST['multiply'])) {
		$res = $firstnum * $secondnum;
		echo $res;
	} elseif (isset($_POST['divide'])) {
		$res = $firstnum / $secondnum;
		echo $res;
	}
	unset($res);
?>

	</div>
</body>
</html>
