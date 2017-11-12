<?php
include 'constants.php';
include 'functions.php';
$consts = get_defined_constants();
$yhour = yhour();
$yminute = yminute();
$ysecond = ysecond();
$remainder = $ysecond % 2;
include 'layout.phtml';
