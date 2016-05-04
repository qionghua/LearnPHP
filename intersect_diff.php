<?php
	$arr = array(
			'a'=>'word',
			'2'=>'excel',
			'3'=>'outlook',
			'4'=>'access'
		);
	$arr1 = array(
			'a'=>'word',
			'b'=>'excel',
			'c'=>'ds'	
		);
	print_r($arr);
	print_r($arr1);
	print_r(array_intersect($arr,$arr1));
	print_r(array_diff($arr,$arr1));	
	print_r(array_intersect_assoc($arr,$arr1));
	print_r(array_diff_assoc($arr,$arr1));
?>
