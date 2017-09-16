<?php
	error_reporting(0);
	include "connection.php";
	if(isset($_POST["submit2"])){

		$fname = $_FILES["csv2"]["name"];
		$ext_check = explode(".",$fname);

		if(strtolower(end($ext_check)) == "csv"){

			$filename = $_FILES["csv2"]["tmp_name"];
			$handle = fopen($filename, "r");

			while(($data = fgetcsv($handle,1000,",")) !== FALSE){

				$sql = "insert into exam values('{$data[0]}','{$data[1]}','{$data[2]}',{$data[3]},'{$data[4]}')";
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