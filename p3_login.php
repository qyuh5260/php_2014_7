<?php
	session_start();
	//echo $_POST["username"];
	//echo $_POST["password"];
	$account = "syu";
	$passwd ="123";
	if(@$_GET["login"]){
		unset($_SESSION["user"]);
		Header("Location: /p3.html");
	}
	else
	{
		 if(!isset($_SESSION["user"]) || $_SESSION["user"] =="" )
		 {
			if(@$_POST["username"] ==  $account && @$_POST["password"]== $passwd)
			{
				$_SESSION["user"] = $_POST["username"];
				echo "ok!";
			}
			else
			{
				echo "登入失敗";
			}
		 }
		else
			echo "歡迎". $_SESSION["user"] ."<a href=/p3_login.php?login=true>登出</a>";
	}
?>