<?php
	$arr = [[2, 4, 6], [8, 10, 12], [14, 16, 18], [20, 22, 24]];
	
	for ($i = 0, $k = 1; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $k++;
		}
	}
	
	var_dump($arr);
?>ы