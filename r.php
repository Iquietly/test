<?php
$num=1;
for($i=0;$i<3;$i++)
{
	
	if($num!=$i)
	{
		$num-=$i;
	}else{
		$num+=$i;
	}
}
echo $num;


?>