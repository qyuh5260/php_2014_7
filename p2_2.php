<?php
	$t_array=explode(",",$_POST["a"]);
	echo "輸入的數值為number1=".$t_array[0];
	echo " number2=".$t_array[1]."<br>";
	$ans = 0;
	for($i= max($t_array[0],$t_array[1]); $i<=$t_array[0]*$t_array[1] ; $i++)
	{
		if (($i % $t_array[0] == 0)&&($i % $t_array[1] ==0))
				{
					$ans = $i ;
					break;
				}
	}
	echo "最小公倍數為" . $ans;
?>