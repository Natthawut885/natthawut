<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>นัธวุฒิ บัวงาม (มาร์ค)</title>
</head>

<body>
<h1>นัธวุฒิ บัวงาม (มาร์ค)</h1>

<?php
	echo "บทที่ 10 PHP เบื้องต้น <br>";
	print  "วิชา Web Programming <br>";
	
	$name = "Natthawut Buangam";
	$age = 25.5 ;
	//$name = "Somsak";
	
	echo gettype($age); 
	echo "<hr>";
	var_dump($name);
	echo "<hr>";
	
	echo $name ;
	echo "<hr>";
	
	$a = 10 ;
	$b = 5 ;
	$c = 2 ;
	$x = ($a + $b) * $c ;
	echo $x ;
?>


</body>
</html>