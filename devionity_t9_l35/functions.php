<?php
function numstring($n) {
	$a = '';
	for ($i=1; $i <= $n ; $i++) { 
		$a = $a . $i;
	}
	return $a;
}