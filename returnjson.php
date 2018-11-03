<?php
header('Content-type: application/json');
$produk = array(
	'itemId' => ('12341822'), 
	'itemName' => ('desk'), 
	'price' => 700000,
	'ratings' => array('rater' => ['akmal','andi'], 'score' => ['4','5']),
	'is_freeShipping' => true,
	'color' => array('brown','black'),
);

$json = json_encode($produk);
echo $json;

?>