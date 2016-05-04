<?php
	$arr = array(1,3,4,5,6,7,9,11);
	print_r($arr);
	print_r(array_filter($arr,'odd'));
	function odd($n){
		return $n > 20;
	}
?>
