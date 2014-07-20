<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
echo "<table class='table table-bordered'>" ;
for($i=0,$c=0 ;$i<25;$i++)
{
	if(($i) %5 ==0)
		echo "<tr>";
	echo "<td>".$_SESSION['test'][$i]."</td>";
	$c++;
	if($c ==5)
	{
		echo "</tr>";
		$c=0;
	}
}
echo "</table>" ;

?>
</body>
</html>