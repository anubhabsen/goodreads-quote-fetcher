<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Quote of the day</title>
  <meta name="Anubhab Sen">
</head>
<body>
	<h1>Quote of the day</h1>
	<h3>Brought to you by GoodReads</h3>
	<br>
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
</body>
</html>