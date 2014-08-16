<?php
 echo "<table border = 5px>";
 for($j = 0 ;$j<5 ; $j++)
 {
	 echo "<tr>";
	 for($i = 0 ;$i<5 ; $i++)
	 {
	 	$a = rand(0,1);
	 	if($a)
	 		echo "<td><img src='Icon.png'></td>";
	 	else
	 		echo "<td  width='50' height='50'></td>";
	 }
	 echo "</tr>";
 }
 echo "</table>";
?>
