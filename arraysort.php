<?php
	$arr = array(
			'1'=>'word',
			'2'=>'excel',
			'3'=>'outlook',
			'4'=>'access'
		);
	$arr1 = array(
			'6'=>'ppt',
			'7'=>'ec',
			'8'=>'ds'	
		);
	/*
	sort($arr,1);
	print_r($arr);
	rsort($arr1,1);
	print_r($arr1);*/
	asort($arr);
	print_r($arr);
	ksort($arr1);
	print_r($arr1);
?>
