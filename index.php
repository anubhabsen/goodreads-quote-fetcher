<?php

include_once 'func/function.inc.php';

$res = get_curl("https://www.goodreads.com/quotes_of_the_day");

$start = strpos($res, '<div class=\'quote\'>');
$end = strpos($res,'<div class="quoteFooter">', $start);
$length = $end-$start;

$res = substr($res, $start, $length);
$res=str_replace("href=", "",$res);

echo ($res);
?>
