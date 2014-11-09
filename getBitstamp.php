<?php
//get latest price of bitstamp

$jsonusd = file_get_contents('https://www.bitstamp.net/api/ticker/');
$datausd = json_decode($jsonusd, true);
$lastusd = $datausd['last'];

$summary = array(
	'LastUSD' => $lastusd,
);

$encoded_price = json_encode($summary, JSON_HEX_QUOT | JSON_HEX_TAG);
echo $encoded_price;