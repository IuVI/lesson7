<?php
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>lala</title>
</head>
<body>
	<?php
	$v1 = 1;
	$v2 = 2;
	$v3 = 3;

	error_reporting(E_ALL);
	function FunctionName()
	{
		$GLOBALS['v1'] *= 2;
		$v2 *= 2;
		global $v3;
		$v3 *= 2;
	}
	FunctionName();
	echo "$v1$v2$v3";
	?>
</body>
</html>