<?php

	$HOST = "localhost";
	$USER = "root";
	$PASS = "";
	$DB = "parikshak";

	$conn = mysqli_connect($HOST,$USER,$PASS,$DB);
	if(!$conn){
		echo "Connection Failed";
	}

?>