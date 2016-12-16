<?php
function get_curl($url)
{
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL, $url);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
	$result= curl_exec($curl_handle);
	return $result;
}


$res = get_curl("https://www.goodreads.com/quotes_of_the_day");

$start = strpos($res, '<div class=\'quote\'>');
$end = strpos($res,'<div class="quoteFooter">', $start);
$length = $end-$start;

$res = substr($res, $start, $length);
$res=str_replace("href=", "",$res);

echo ($res);
?>
