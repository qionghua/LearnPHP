<?php
	$arr = array(
			'0'=>'word',
			'1'=>'excel',
			'2'=>'outlook',
			'3'=>'access'
		);
	echo next($arr);
	list($n1,$n2,$n3) = $arr;
    echo $n1.",".$n2.",".$n3."\n";
?>
