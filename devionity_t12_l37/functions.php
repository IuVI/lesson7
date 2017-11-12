<?php
function swap(& $arg1, & $arg2) {
	$arg1 = $arg1 - $arg2;
	$arg2 = $arg2 + $arg1;
	$arg1 = $arg2 - $arg1;
}