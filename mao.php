<?php
//送给心爱的她5201314
$arr = array('5','2','0','1','3','1','4');
 
function BubbleSort(array $arr)
{
 
	for ($i=0 ; $i <count($arr) ; $i++) { 
		//设置一个空变量
		$data = '';
		for ($j=$i ; $j < count($arr)-1 ; $j++) { 
			if ($arr[$i] > $arr[$j+1]) {
 
				$data      = $arr[$i]; 
				$arr[$i]   = $arr[$j+1];
				$arr[$j+1] = $data; 
			}
		}
	}
 
	return $arr;
}
echo "<pre>";
print_r(BubbleSort($arr));
