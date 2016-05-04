<?php
	$arr = array(
			'1'=>'word',
			'2'=>'excel',
			'3'=>'outlook',
			'4'=>'access'
		);
	print_r($arr);
	echo "输出第二个元素:" . $arr[2]."\n";
	next($arr);
	echo "输出当前元素:" . current($arr)."\n";
	echo "重置元素：" . reset($arr)."\n";
	echo "前一个元素：" . var_dump(prev($arr))."\n";
    end($arr);
	var_dump(next($arr));
?>
