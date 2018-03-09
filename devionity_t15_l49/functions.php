<?php
function randiv3() {
	$ar1 = [];
	$ar2 = [];
	for ($i=0; $i <=9 ; $i++) { 
		$ar1[] = rand(1,100);
	}
	foreach ($ar1 as $k) {
		$k % 3 == 0 ? $ar2[] = $k : null;
	}
	;
	return $ar3 = [$ar1, $ar2];
}