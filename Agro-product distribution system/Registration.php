
<!-- saved from url=(0044)file:///C:/Users/KNiF3/Desktop/CRM/test.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">




<title>Registration</title>

<meta name="viewport" content="width=device-width ,initial-scale=1">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script href="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script href="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="Reg.css">

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
<form  method="post" >

<tbody><tr><td colspan="4"><h3>Farmer Registration</h3></td></tr>
<tr align="center">
    <td><p>First Name</p></td>
    <td><input type="text" name="name" id="myInput" placeholder="eg. Mohan"></td>
    <td><p>Last Name</p></td>
    <td><input type="text" name="lastname" id="myInput" placeholder="eg. Singh"></td>
</tr>

    
<tr align="center">
    <td><p>Mobile Number</p></td>
    <td><input type="text" name="mobile" id="myInput" placeholder="+91XXXXXXXXXX"></td>
    <td><p>K-card No.</p></td>
    <td><input type="text" name="kno" id="myInput" placeholder="eg. 2377833732882"></td>
</tr>


<tr align="center">
    <td><p>Father's Name</p></td>
    <td><input type="text" name="fname" id="myInput"></td>
    <td><p>Mother's Name</p></td>
    <td><input type="text" name="mname" id="myInput"></td>
</tr>

<tr align="center">
    <td>
        <p>Permanent Address</p>
    </td>
    <td colspan="4">
        <input type="text" name="permanent" id="myInput">
    </td>
</tr>

<tr align="center"> 
    <td>
        <p>Adhar No.</p>
    </td>
    <td>
        <input type="text" name="aadhar" id="myInput">
    </td>
    
    <td>
        <input type="" style="margin-left:40%" value="Biometrics"/>
    </td>
    
</tr>

<tr>
    <td>
        <input type="submit" style="margin-left:150%; margin-top:10%" value="Registration" name="submit">
    </td>
</tr>




</form>

<?php include('connect.php');
if(isset($_POST['submit']))
{ 
      $name = $_REQUEST['name'];
       $lastname = $_REQUEST['lastname'];
        $mobile = $_REQUEST['mobile'];
         $kno = $_REQUEST['kno'];
          $fname = $_REQUEST['fname'];
           $mname = $_REQUEST['mname'];
           $permanent = $_REQUEST['permanent'];
            
                
                
                    
                      $aadhar = $_REQUEST['aadhar'];
                       
                           
 
   
    $sql = "insert into rgg(name, lastname, mobile, kno, fname ,mname , permanent, aadhar) values('$name', '$lastname', '$mobile', '$kno', '$fname', '$mname', '$permanent','$aadhar')";

     $res = mysqli_query($con,$sql);
                      if($res)
                      {
                      
                        echo "<script>alert('massage send sucessfully');</script>";
                      }
                      else
                      {
                        echo "<script>alert('Process Failed!');</script>";
                      
                    }
                }
                    ?>



</tbody></table>
</div>
<div class="col-sm-7 col-md-7 col-xs-12;"></div>

</div>
</div>

</doctype!></body></html>