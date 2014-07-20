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
	echo "<table class='table table-bordered'>" ;
	for($i=0 ;$i<=4;$i++)
	{
		echo "<tr>";
		for($j=0;$j<=4;$j++)
		{
			
			$a[$i][$j]= rand();
			echo "<td>".$a[$i][$j];
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>" ;
?>

<br>
<form action="hw4.php">
<input class="btn btn-warning" type="submit" value="Submit">
</form>
<br>
<?php
 session_start();
	for($i=0 ;$i<=4;$i++)
	{
		for($j=0;$j<=4;$j++)
		{
			$b[1][4] = $a[0][4];
			if(($i==0 && $i!=4)||($i==1 && $j==1)||($i==1 && $j==2))
				$b[$i][$j+1] = $a[$i][$j];
			else if (($i!=4 && $j==4) || ($i==1&&$j==3) || ($j==3&& $i==2))
				$b[$i+1][$j] = $a[$i][$j];
			else if (($i==4)&&($j!=0)||(($j==2)||($j==3))&&($i==3))
				$b[$i][$j-1] = $a[$i][$j];
			else if ($i==2 && $j==2)
				$b[2][2] = $a[2][2];
			else
				$b[$i-1][$j] = $a[$i][$j];
		}
	}
	$k=0;
		for($i=0 ;$i<=4;$i++)
			for($j=0;$j<=4;$j++)
				$_SESSION['test'][$k++]=$b[$i][$j];	
?>
<img src="table.png">
</body>
</html>