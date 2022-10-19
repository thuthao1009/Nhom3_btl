<?php 
	$host="localhost";
	$username="root";
	$passwword="";
	$dbname="webba";
	$con = mysqli_connect($host,$username,$passwword,$dbname);
	if ($con)
	{
		//echo "Kết nối đến CSDL thành công";
	
	}
	else 
	{
		echo"thất bại";
	}
	;?>