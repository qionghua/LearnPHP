<?php
	$arr = array(
			0 => "word",
			3 => "excel",
			"outlook",
			"access"
		);
	echo $arr[2];			//索引2处没有定义
	foreach($arr as $a){
		echo "$a"."\n";
	}
	foreach($arr as $key=>$value){
		echo "$key=>$value"."\n";
	}
?>
