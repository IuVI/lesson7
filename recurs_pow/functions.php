<?php
function rec_pow(int $num, int $pow) {
	if ($pow > 1) {
		return $num * rec_pow($num, $pow -1);
	} elseif ($pow < 1) {
		return 1 / rec_pow($num, $pow * -1);
	} else {
		switch ($pow) {
			case 0: return 1; break;
			case 1: return $num; break;
		}
	}
}