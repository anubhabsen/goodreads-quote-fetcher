<?php
	include_once'func/function.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Quote of the day</title>
  <meta name="Anubhab Sen">
</head>
<body>
	<div style="text-align: center;">
		<img src="images/goodreads.jpg">
		<h1>Quote of the day</h1>
	</div>
	<br>
	<div style="text-align: center;">
		<?php
		$res = get_curl("https://www.goodreads.com/quotes_of_the_day");
		$start = strpos($res, '<div class=\'quote\'>');
		$end = strpos($res,'<div class="quoteFooter">', $start);
		$length = $end-$start;
		$res = substr($res, $start, $length);
		$res=str_replace("href=", "",$res);
		echo ($res);
		?>
	</div>
	<br><br><br>
	<div style="text-align: center;">
		<?php
		$res = get_curl("https://www.goodreads.com/quotes_of_the_day");
		$start = strpos($res, 'About this quote');
		$end = strpos($res,'<div class="bigGreyBoxBottom">', $start);
		$length = $end-$start;
		$res = substr($res, $start, $length);
		$res=str_replace("href=", "",$res);
		echo ($res);
		?>
	</div>
</body>
</html>