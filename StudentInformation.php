<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0083)http://resulthosting.in/hoster/online-result-display-system-demo/6subjects/home.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>| Administrator Page |</title>
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/css" rel="stylesheet" type="text/css">
<script src="./css/jquery-1.11.1.min.js.download"></script>
<script src="./css/bootstrap.min.js.download"></script>
<link type="text/css" rel="stylesheet" href="./css/main.css">
<link href="./css/css(1)" rel="stylesheet" type="text/css"> 
</head>
<body>
<link type="text/css" rel="stylesheet" href="./css/dataTables.bootstrap.css">

<script type="text/javascript" src="./css/dataTables.bootstrap.js.download"></script>
<script type="text/javascript" charset="utf8" src="./css/jquery.dataTables.js.download"></script>
<center><h1><font face="Francois One">University Of Michigan</font><br/><small><font face="Francois One" color="#F32E01">ADMIN HOME PAGE</font></small></h1>

<button class="btn btn-warning" onclick="showstu()"><span class="glyphicon glyphicon-cloud-upload"></span> Student Data Upload</button>..
<button class="btn btn-success" onclick="uploadres()"><span class="glyphicon glyphicon-list-alt"></span> Upload New Result</button>..
<button class="btn btn-primary" onclick="showxamdata()"><span class="glyphicon glyphicon-education"></span>Exam Data Upload</button>..
<button class="btn btn-danger" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
</center>

	<!--Upload xml file-->
	<div id="upstudata" style="height:400px; width : 100%; margin-top: 50px; display:none" ">
		<p align="center">Upload .CSV File To Student Database, Keep In Mind That When You Upload .csv file <strong>its Name (Include File Extension) Must Be result.csv</strong></p>
		<p align="center">Make Sure that this data will be stored in the database</p>
		<div class="table-responsive">
			<table width="800" style="margin:75px auto; background:#f8f8f8; border:2px solid #BFBFBF; padding:10px;">
				<form action="uploadstudent.php" method="post" enctype="multipart/form-data">
					<tbody><tr><td colspan="2" style="text-align:center; border-bottom:1px solid #eee; padding:5px 0 10px 0;">
								</td></tr>
							<tr><td colspan="2" style="text-align:center; padding:0 0 5px 0;">University Of Michigan: Excel Data Uploading System</td></tr>
							<tr><td width="50%" style="text-align:right; border-bottom:1px solid #eee; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Select file</td>
								<td width="50%" style="border-bottom:1px solid #eee; padding:5px;"><input type="file" name="csv" id="file"></td>
							</tr>
							<tr><td style="text-align:right; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Submit</td>
								<td width="50%" style=" padding:5px;"><input type="submit" name="submit" class="myButton"></td>
							</tr>
					</tbody>
				</form>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		function showstu() {
			document.getElementById('addxamdata').style.display = "none";
			document.getElementById('upnewres').style.display = "none";
	   		document.getElementById('upstudata').style.display = "block";
		}
	</script>

	<!--Upload new result-->
	<div id="upnewres" style="height:400px; width : 100%; margin-top: 50px; display:none" ">
		<p align="center">Upload .CSV File To upload new Result to the Result Database, Keep In Mind That When You Upload .csv file <strong>its Name (Include File Extension) Must Be upload.csv</strong></p>
		<p align="center">Make Sure that this data will be stored in the database and it contains the enrollment number and marks of student and status(P,AB,DB,U) only</p>
		<div class="table-responsive">
			<table width="800" style="margin:75px auto; background:#f8f8f8; border:2px solid #BFBFBF; padding:10px;">
				<form action="uploadnewresult.php" method="post" enctype="multipart/form-data">
					<tbody><tr><td colspan="2" style="text-align:center; border-bottom:1px solid #eee; padding:5px 0 10px 0;">
								</td></tr>
							<tr><td colspan="2" style="text-align:center; padding:0 0 5px 0;">University Of Michigan: Excel Data Uploading System</td></tr>
												
							<tr><td width="50%" style="text-align:right; border-bottom:1px solid #eee; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Select file</td>
								<td width="50%" style="border-bottom:1px solid #eee; padding:5px;"><input type="file" name="csv1" id="file"></td>
							</tr>
							<tr><td style="text-align:right; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Submit</td>
								<td width="50%" style=" padding:5px;"><input type="submit" name="submit1" class="myButton"></td>
							</tr>
					</tbody>
				</form>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		function uploadres() {
			document.getElementById('addxamdata').style.display = "none";
			document.getElementById('upstudata').style.display = "none";
	   		document.getElementById('upnewres').style.display = "block";
		}
	</script>

	<!--Add new result-->
	<div id="addxamdata" style="height:400px; width : 100%; margin-top: 50px; display:none" ">
		<p align="center">Upload the Exam Data includes uploading the details of exam like <strong>exam id,title, month,year and status</strong> for that exam</p>
		<div class="table-responsive">
			<table width="800" style="margin:75px auto; background:#f8f8f8; border:2px solid #BFBFBF; padding:10px;">
				<form action="examupload.php" method="post" enctype="multipart/form-data">
					<tbody><tr><td colspan="2" style="text-align:center; border-bottom:1px solid #eee; padding:5px 0 10px 0;">
								</td></tr>
						<tr><td colspan="2" style="text-align:center; padding:0 0 5px 0;">University Of Michigan: Excel Data Uploading System</td></tr>
												
							<tr><td width="50%" style="text-align:right; border-bottom:1px solid #eee; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Select file</td>
								<td width="50%" style="border-bottom:1px solid #eee; padding:5px;"><input type="file" name="csv2" id="file"></td>
							</tr>
							<tr><td  colspan="2" style="text-align:center; padding:5px 10px 5px 0px; border-right:1px solid #eee;">
								<input type="submit" name="submit2" class="myButton" style=" width:330px" value="Upload to DataBase">
							</td>
							</tr>
					</tbody>
				</form>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		function showxamdata() {
			document.getElementById('upstudata').style.display = "none";
			document.getElementById('upnewres').style.display = "none";
	   		document.getElementById('addxamdata').style.display = "block";
		}

		function logout()
		{
			window.location.href="admin.php";
		}
	</script>

</body></html>