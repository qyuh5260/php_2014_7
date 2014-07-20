<?php
function  f($x)
{
	if($x==1)
		return 0;
	else if ($x%2==0)
		return 1+f($x/2);
	else
		return min(1+f($x+1),1+f($x-1));
}
echo f($_POST["abc"]);
?>
