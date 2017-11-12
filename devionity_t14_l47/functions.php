<?php
/*Дана функція працює швидше, ніж стандартний метод, оскільки перевірюється лише непарні числа,
що закінчуються на 1, 3, 7, 9 та менші від кореня з максимального числа
Чому саме корінь добре описано тут https://habrahabr.ru/post/122538/*/
function primerange($arg1,$arg2) {
	if ($arg1 % 2 == 0){
		$arg1++;
	}
	$primearray = array(2);
	$max = 0;
	$checklimit = ceil(sqrt($arg2)); #максимальне значення, що необхідно перевірити чи є воно дільником
	if ($arg1 > 3) {
		$primearray = primerange(3, $arg1);
		$max = count($primearray) - 1;
	} # дана перевірка здійснюється на випадок, коли ми генеруємо прості числа > деякого N, що є більшим за 3.
	for ($i=$arg1; $i <= $arg2; $i+=2) {
		if ($i > 10 && $i % 10 == 5) {
			continue;
		}
		for ($j=0; $j <= $max; $j++) { 
			if ($i % $primearray[$j] == 0) {
				break;
			} elseif ($primearray[$j] <= $checklimit && $j == $max) {
				$primearray[] = $i;
				$max++;
			} elseif ($primearray[$j] > $checklimit && $j == $max) {
				$primearray[] = $i;
			}
		}
	}
	if ($arg1 > 3) {
		$primearray = array_filter($primearray, function ($x) use ($arg1) {return $x >= $arg1;});
	}
	return $primearray;
}