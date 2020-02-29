
<!-- saved from url=(0044)file:///C:/Users/KNiF3/Desktop/CRM/test.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">




<title>LOGIN</title>

<meta name="viewport" content="width=device-width ,initial-scale=1">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script href="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script href="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="AGR.css">

<!----------------------------------------------------------FUNCTION DISABLED FOR VIEW SOURCE CODE------------------------------------------------->

<script language="JavaScript">

<!-- http://www.spacegun.co.uk -->

var message = "function disabled";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</script>


<script src="block.js"></script>

</head>


<body><doctype! html="">

<div class="container-fluid main">

<div class="row">
<div class="col-sm-2 col-md-2 col-xs-12"></div>
<div class="col-sm-3 col-md-3 col-xs-12 form-area">
<img src="Agriculture.png" alt="" class="avatar">
<table width="100%">
<form  method="post">


<tbody><tr><td><h3>Farmer Login</h3></td></tr>
<tr><td><p>Kissan Card Number</p></td></tr>
<tr><td><img src="user.png" class="user"><input type="text" name="kno" id="myInput" placeholder="6577737828732"></td></tr>

    
    <tr><td><p>Mobile Number</p></td></tr>
<tr><td><img src="mobile.png" class="user"><input type="text" name="mobile" id="myInput" placeholder="+91XXXXXXXXXX"></td></tr>

    

    
    
    <tr><td><input type="submit"  name="login" value="OTP"/></td></tr>
    <tr><td><p>OTP</p></td></tr>
<tr><td><img src="password.png" class="password" style="margin-top:3%"><input type="text" name="" id="myInput" onpaste="return false;"></td></tr>


<tr><td><input type="submit" class="verify" value="Verify"/></td></tr>


<tr><td><input type="submit" value="Biometrics"/></td></tr>

</form>
</tbody></table>
</div>
<div class="col-sm-7 col-md-7 col-xs-12;"></div>

</div>
</div>


<?php
include('connect.php');
if(isset($_POST['login']))
{
$kno=$_REQUEST['kno'];
$mobile=$_REQUEST['mobile']; 
$sql="select * from rgg where kno='$kno' AND mobile='$mobile'";
 
 
$res= mysqli_query($con,$sql);
$data= mysqli_fetch_array($res); 
if($data)
{
    $_SESSION['user'] = $data['name'];
echo "<script>
alert('Login Successful');
window.location.href='index.php';
</script>";
}
else
{
echo "<script>
alert('Invalid Email And password! Retry');
window.location.href='sign in.php';
</script>";
}
}
?>

</doctype!></body></html>