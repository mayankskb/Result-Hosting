<?php
	error_reporting(0);
	include "connection.php";
	if(isset($_POST["submit"])){

		$fname = $_FILES["csv"]["name"];
		$ext_check = explode(".",$fname);

		if(strtolower(end($ext_check)) == "csv"){

			$filename = $_FILES["csv"]["tmp_name"];
			$handle = fopen($filename, "r");

			while(($data = fgetcsv($handle,1000,",")) !== FALSE){

				$sql = "insert into student values('{$data[0]}','{$data[1]}','{$data[2]}','{$data[3]}',{$data[4]},'{$data[5]}','{$data[6]}')";
				mysqli_query($conn,$sql) or die(mysql_error());

			}

			fclose($handle);
			sleep(5);
			header('location:StudentInformation.php');	
		}
		else{
			echo "The file is not a csv";
		}
	}
?>