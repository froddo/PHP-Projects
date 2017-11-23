<?php

$data=file('data.csv');

$put=[];
foreach ($data as $k) {
	$result=explode(',', $k);
	$put[]=[
			'data'=>$result[0],
			'region'=>$result[1],
			'name'=>$result[2],
			'product'=>$result[3],
			'price1'=>$result[4],
			'price2'=>$result[5],
			'total'=>$result[6]




	];
}

include 'adress.php';