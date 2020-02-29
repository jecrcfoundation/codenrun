
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
<table width="100%" border="1">



 <?php include('connect.php');
$sql = "select * from rgg order by id DESC";
$res = mysqli_query($con,$sql);
$tepp = mysqli_fetch_array($res);
?>


  <tr>
    <td>
      <label>Sales Rep. Name</label>
    </td><td>
      <label>
       Date Of Issue</label>
    </td><td><label>
      MOP</label></td></tr>
      <tr>
        <td><?php echo $tepp['name']?>
        
          
        </td><td>
          <?php
                  date_default_timezone_set("America/New_York");
                  echo "Time " . date("h:i:sa");
                  ?>
          
        </td>
       
        <td>
          <select>
          <option>Paytm</option>
          <option>Bhim Pay</option>
          <option>Cash</option>
          </select><td>


          
        </td>
          
        </tr>
 </table></br></br>
<table width="100%" border="1">






  <tr>
    <td>
      <label>Product No</label>
    </td><td>
      <label>
      Description</label>
    </td><td><label>
      Serial No</label></td>
      <td>Qunantity</td>
      <td>Price</td>
      <td>Total Price</td></tr>
      <tr>
        <td><p>200020202</p>
        
          
        </td>
        <td> <p>nitrogen phosphorus</p></td>
        <td><p>32323243</p></td>
        <td><p>5kg</p></td>
        <td>
          <p>500 </p>
        </td><td>
          
        </td> </tr>
         <tr>
        <td><p>200020202</p>
        
          
        </td>
        <td> <p>nitrogen phosphorus</p></td>
        <td><p>32323243</p></td>
        <td><p>5kg</p></td>
        <td>
          <p>500 </p>
        </td><td>
          
        </td> </tr>
         <tr>
        <td><p>200020202</p>
        
          
        </td>
        <td> <p>nitrogen phosphorus</p></td>
        <td><p>32323243</p></td>
        <td><p>5kg</p></td>
        <td>
          <p>500 </p>
        </td><td>
          
        </td> </tr>
         <tr>
        <td><p>200020202</p>
        
          
        </td>
        <td> <p>nitrogen phosphorus</p></td>
        <td><p>32323243</p></td>
        <td><p>5kg</p></td>
        <td>
          <p>500 </p>
        </td><td>
          
        </td> </tr>
         <tr>
        <td><p>200020202</p>
        
          
        </td>
        <td> <p>nitrogen phosphorus</p></td>
        <td><p>32323243</p></td>
        <td><p>5kg</p></td>
        <td>
          <p>500 </p>
        </td><td>
          
        </td> </tr>
         <tr>
        <td><p>200020202</p>
        
          
        </td>
        <td> <p>nitrogen phosphorus</p></td>
        <td><p>32323243</p></td>
        <td><p>5kg</p></td>
        <td>
          <p>500 </p>
        </td><td>
          
        </td> </tr>
 </table>
 <button>Submit</button>




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