<?php
	$arr1 = range(1,5);
	array_map('cube',$arr1);
	$arr2 = range(1,4,2);
	print_r($arr1);
	print_r($arr2);
	array_map('add',$arr1,$arr2);
	function cube($n){
		echo $n*$n*$n."\n";
	}
	function add($n1,$n2){
		echo ($n1 *  $n2) ."\n"; 
	}
?>
