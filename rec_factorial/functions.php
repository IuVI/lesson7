<?php
function factorial(int $num) {
	$num > 1 ? $num = $num * factorial($num -1) : $num = 1;
	return $num;
}