<?php
	class s {
		var $a;
		var $b;
		var $c;

		function show()
		{
			echo "a=" . $this->a . "<br>";
			echo "b=" . $this->b . "<br>";
			echo "c=" . $this->c . "<br>";
		}
	}
	$obj = new s;
	$obj->a =1;
	$obj->b =2;
	$obj->c =3;
	$obj->show();

?>