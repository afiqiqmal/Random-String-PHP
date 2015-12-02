<?php
	function characterSuffle($len = 6) {
	    $list = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	    $str = substr(str_shuffle($list), 0, $len );
	    return $str;
	}
	
	echo characterSuffle();
	echo characterSuffle(8);
	echo characterSuffle(16);
	echo characterSuffle(32);
?>