<?php
	$str = "milk,abc,sdg,csfds,sdg";
	print_r(explode(',',$str));
	print_r(explode(',',$str,2));
	print_r(explode(",",$str,10));
	print_r(explode("asf",$str));
	print_r(explode("sdg",$str));
?>
