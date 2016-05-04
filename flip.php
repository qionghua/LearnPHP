<?php
	$arr = array(
			'a'=>'word',
			'2'=>'excel',
			'3'=>'excel',
			'4'=>'word'
		);
	$arr1 = array(
			'a'=>'word',
			'b'=>'excel',
			'c'=>'ds'	
		);
	print_r(array_flip($arr));
	print_r(array_flip($arr1));
?>
