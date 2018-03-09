<?php
include 'functions.php';
$a = randiv3();
include 'layout.phtml';
echo "Згенеровано наступну послідовність: ";

foreach ($a[0] as $key) { 
	echo " " .strval($key);
}
echo "<br> З них націло діляться на 3:";
foreach ($a[1] as $key) { 
	echo " " .strval($key);
}
