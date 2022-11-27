<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
    $res = 0;
	
	foreach ($arr as $elem) {
		$res += $elem;
	}
	
	echo $res '<br>';
?>