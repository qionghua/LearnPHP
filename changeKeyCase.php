<?php
	$arr = array(
			'a'=>'word',
			'b'=>'excel',
			'c'=>'outlook',
			'd'=>'access'
		);
	$arr1 = array_change_key_case($arr,CASE_UPPER);
	$arr2 = array_change_key_case($arr1,CASE_LOWER);
	print_r($arr1);
	print_r($arr2);
?>
