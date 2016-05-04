<?php
	$str = "abcdefg";
	$search = array(
			'a',
		);
	$replace = array(
			'A',
			'D'
		);
	echo str_replace($search,$replace,$str);
?>
