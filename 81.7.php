<?php
	function func($num) {
		$sum = 0;
		
		for ($i = 1; $i <= $num; $i++) {
			$sum += $i;
			
		}
        return $sum;
	}
	
	echo func(5);
?>