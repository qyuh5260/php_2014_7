<?php
	header("Content-Type:text/html; charset=utf-8");
	$db_link = @mysql_connect("localhost","root","1234");
	/*
	if(!$db_link)
		echo "mysql連結失敗";
	else
		echo "mysql連結成功";
		*/

	$seldb = @mysql_select_db("stust");
/*	
	if(!$db_link)
		echo "db連結失敗";
	else
		echo "db連結成功";

*/
	
	mysql_set_charset('utf8');
	$input = $_POST["abc"];
	$a = "SELECT * FROM `student` WHERE `uid`= '$input' " ;
	$result = mysql_query($a);


	while($c = mysql_fetch_row($result))
	{
		foreach ($c as $value) {
			echo $value."<hr>";
		}
	}
?>
