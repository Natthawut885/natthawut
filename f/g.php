<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>นัธวุฒิ บัวงาม (มาร์ค)</title>
</head>

<body>
<h1>นัธวุฒิ บัวงาม (มาร์ค)</h1>

<form method="post" action="">
แม่สูตรคูณ <input type="number" name="a"  min="2" max="1000" autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
	
	$m = $_POST['a'] ;
	
	for($i=1; $i<=12; $i++){
		$b = $m * $i ;
		echo "{$m} x {$i} = {$b} <br>";
	}
}
?>
</body>
</html>