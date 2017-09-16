<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>| Administrator Page |</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./css/jquery-1.11.1.min.js.download"></script>
    <script src="./css/bootstrap.min.js(1).download"></script>
    <link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div id="fhalf">
      <img src="./images/logo.png" style="margin-top:150px; margin-left:50px">
    </div>
    <div id="rhalf">
      <h2 align="center">
        <font face="Francois One">University Of Michigan</font><small><br/>
        <font face="Francois One" color="#4B9B13">...Administrator Page...</font></small>
      </h2>
          
              <div class="card card-container">
                 <form method="post" action="admin.php">
                      <span id="reauth-email" class="reauth-email"></span>
                      <input name="login" type="text" placeholder="Your Username.." id="login" required="" autofocus="" style="width:270px;">
                      <input name="passwd" type="password" placeholder="Enter Your Password.." id="passwd" required="" style="width:270px; margin-top:10px; margin-bottom:10px">
                      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="sbt">Sign in</button>
                  </form><!-- /form -->
            </div>
   </div>
  </div>
  <div id ="out"></div>
  </body></html>


<?php 
  error_reporting(0);
  $loginname = "admin";
  $psswd= "1234";
  if(isset($_REQUEST['sbt'])){
  if( $loginname == $_REQUEST['login'] && $psswd == $_REQUEST['passwd'])
    header("location:studentInformation.php");
  else
  {
    echo '<script language="javascript">';
    echo 'alert("Login Id or Password may be wrong")';
    echo '</script>';
  }
}
?>
