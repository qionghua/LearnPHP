<?php
	$string = "abc";
	$str = "你好！abc";
	echo strlen($string)."\n";
	echo strlen($str)."\n";
	echo mb_strlen($str,"UTF8")."\n";
	echo mb_strlen($string)."\n";
?>
