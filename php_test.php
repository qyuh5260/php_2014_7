<?php
$c = count($_FILES["fileupload"]["name"]);

for($i=0;$i<$c;$i++)
{
	if(move_uploaded_file($_FILES["fileupload"]["tmp_name"][$i],"gg\\".$_FILES["fileupload"]["name"][$i] ))
		{
		echo "�W�Ǧ��\<br>";
		echo $_FILES["fileupload"]["name"][$i]."<br>";
		echo $_FILES["fileupload"]["type"][$i]."<br>";
		echo $_FILES["fileupload"]["size"][$i]."<hr>";
		$d[] =  md5_file("gg\\".$_FILES["fileupload"]["name"][$i]);
		}
	else 
		echo "�W�ǥ���";
}

foreach ($d as $i)
	echo $i."<br>";
?>


