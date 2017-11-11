<?php
define('YEAR', 365);
define('DAY', 24);
define('HOUR', 60);
define('MINUTE', 60);
$consts = get_defined_constants();
include 'functions.php';
$yhour = yhour();
$yminute = yminute();
$ysecond = ysecond();
$remainder = $ysecond % 2;
include 'layout.phtml';