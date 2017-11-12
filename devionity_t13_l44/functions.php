<?php
function maximum($arg1,$arg2) {
	if ($arg1 == $arg2) {
		return "Рівні";
	}
	return $arg1 > $arg2 ? 'Перше' : 'Друге';
}