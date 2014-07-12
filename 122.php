<!DOCTYPE html>
<html>
<head>
<meta charset="BIG5">
<title>Insert title here</title>
</head>
<body>
<?php
	$b =  $_POST["abc"];
	$ans = 0;
	for($i=1 ; $i<$b ; $i++)
	{
		if($b % $i == 0)
			$ans += $i;
	}
	if($ans == $b)
		echo $b."是完美數";
	else
		echo $b."不是完美數";
?>
</body>
</html>