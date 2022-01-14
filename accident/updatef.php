
<?php
session_start();
if(isset($_SESSION['Teamcontroler']))
{
  
 echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b> ".$_SESSION['u_namee']."</p>";

}else{
header("refresh:1 url=index.php");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>KCPS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap_css/bootstrap.min.css">

  <link rel="stylesheet" href="bootstrap_css/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap_css/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap_css/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap_css/font/css/all.css">
    <link rel="stylesheet" href="bootstrap_css/font/js/all.js">
  
   
<script src="bootstrap_css/js/bootstrap.min.js"></script>
<script src="bootstrap_css/font/js/all.js"></script>

  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/input.css">
 <link rel="stylesheet" type="text/css" href="css/updfi.css">

<style>

span{
  margin-left:110px;
}
</style>

</head>

<body>

<nav id="home"class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="icon/etho.jpg"  style="width:30px;height:30px;">
      <h1 style="margin-top:0px;"><b><img src="b.png" style="width:500px;height:50px;margin-top:0px;"></b></h1>
    </div>
    

    
    <div class="top"> 
    <ul class=" navbar"style="">
      <li ><a href="index.php" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i>Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i> News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>   Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>  About us</a></li>
        <ul class="navbar-right">
      <li><a href="logout.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>

   
 
    <div class="tas">
    <button type="button" class="btn btn-default"><a href="change.php"><i class="fas fa-edit"></i> &nbsp; Change password</a></button>
 <br>
    <button type="button" class="btn btn-default"><a href="viewf.php"><i class="fas fa-eye"></i>&nbsp; View request</a></button>
<br>
 <button type="button" class="btn btn-default"><a href="send.php"><i class="fas fa-paper-plane"></i>&nbsp; Send request</a></button>
 <div class="dropdown">
     <button class="btn btn-default dropdown-toggle"style="color:#23527c;" type="button" id="menu1" data-toggle="dropdown"><i class="fas fa-list"></i> &nbsp; Manage File
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="add.php"><i class="fas fa-plus"></i> &nbsp;Add file</a></li>
    
      <li><a href="updatef.php"><i class="fas fa-edit"></i> &nbsp; Update file</a></li>
   
      <li><a href="deletf.php"><i class="fas fa-trash-alt"></i> &nbsp; Delete file</a></li>
  
      <li><a href="viewfill.php"><i class="fas fa-eye"></i> &nbsp; View accident file</a></li>
    </ul>
  </div>
  </div>
<script type="text/javascript">
function vali(){
  var fil=document.getElementById('fil').value;


   if(fil==""){
         document.getElementById('ab').innerHTML="Please Fill file id!";
         return false;
       }
     
       if(isNaN(fil)){
         document.getElementById('ab').innerHTML="Only number allowed!";
         return false;
       }

//
       
}
</script>





 <div class="heding">
  <h1><b style="font-size:24px;">Update file by using file ID</b></h1>
  </div>
<div class="report">
<div class="ffrpo">
<form name="myform"action=""method="POST">

<div class ="formgr">
<p><b style="color:red;margin-left:40px;">File ID:</b></p>
<input type="number"name="file" id="fil" class="form-control"placeholder="File id">
 <span id="ab"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<p><b>Full Name:</b></p>
<input type="text"style=""name="fname" id ="fnamee"class="form-control"placeholder="Full name"title="Only_leater">
<span id="na"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<p><b>Sex:</b></p>
<select type="option"style="width:100px;"name="sex"title="U must select one">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>

<div class ="formgr">
<p><b>Age:</b></p>
<input  type="number"name="age" id ="age"class="form-control"placeholder="age"title="Only_Number">
 <span id="ac"class="text-danger font-weight-bold"></span>
</div>
</div>


<div class="mid">
<div class ="formgr">
<p><b>Date of birth:</b></p>
<input type="date" id ="datb"style="width:140px;margin-left:px;"name="dat"title="set date"class="form-control">
 <span id="acc"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<p><b>Phone:</b></p>
<input type="number" id ="phone"style=""name="phone"class="form-control"placeholder="09........"title="Only_Number">
 <span id="ph"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<p><b>Type of Accednt:</b></p>
<select type="option"name="actype"style="width:150px;;"title="U must select one">
<option>Car Accident</option>
                       <option>Fire Accident</option>
                       <option>Flood Accident</option>
                       <option>Electric Accident</option>
                       <option>Harrassement</option>
                       <option>Self Killing</option>
</select>
</div>

<div class ="formgr">
<p><b>Address:</b></p>
<input type="text" id="adr" name="address"class="form-control"placeholder="Like->kebele 02"title="Only_leater">
 <span id="af"class="text-danger font-weight-bold"></span>
</div>
</div>

<div class="ssrpo">
<div class ="formgr">
<p><b>Date:</b></p>
<input type="date"name="datee" id="date"title="Set a date"style="width:145px;">
 <span id="ag"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<p><b>Time:</b></p>
<input type="time"name="timee" id ="time"title="Set a time">
 <span id="ah"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<p><b>People Die:</b></p>
<input style="width:95px;" id="pdie" type="number"placeholder="How mach"name="pdate"class="form-control">
<span id="ai"class="text-danger font-weight-bold"></span>
</div>
</div>

<p style="margin-top:230px;"><b>Details of incident:</b></p><br>
<textarea type="text" id="cont"style="height:200px;margin-top:240px;width:895px;"name="dinfo"class="form-control"placeholder="Conntent......"title="Fill"></textarea>
 <span id="aj"class="text-danger font-weight-bold"></span>


<button onclick="vali()"style="width:90px;margin-left:300px;margin-top:2px;"type="submit" name="savee"class="btn btn-default" value="Submit"><i class="far fa-save"></i>Save</a></button>
</form>
<?php
include"conn.php";


session_start();


if(isset($_POST['savee']) )
{

$fil=$_POST['file'];
$fn=$_POST['fname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$datb=$_POST['dat'];
$phone=$_POST['phone'];
$actype=$_POST['actype'];
$adrs=$_POST['address'];
$datee=$_POST['datee'];
$time=$_POST['timee'];
$pdie=$_POST['pdate'];
$con=$_POST['dinfo'];



$fil=mysql_real_escape_string($fil);
$fn=mysql_real_escape_string($fn);
$sex=mysql_real_escape_string($sex);
$age=mysql_real_escape_string($age);
$datb=mysql_real_escape_string($datb);
$phone=mysql_real_escape_string($phone);
$actype=mysql_real_escape_string($actype);
$adrs=mysql_real_escape_string($adrs);
$datee=mysql_real_escape_string($datee);
$time=mysql_real_escape_string($time);
$pdie=mysql_real_escape_string($pdie);
$con=mysql_real_escape_string($con);


if(empty($fil) || 
   empty($fn) ||
   empty($sex) ||
   empty($age) ||
   empty($datb) ||
   empty($phone) ||
   empty($actype) || 
   empty($adrs) ||
   empty($date) ||
   empty($time) ||
   empty($pdie) ||
   empty($con))
  
   {
     echo"";
   }
  
    

$sql=mysql_query("UPDATE tview set name='$fn',sex='$sex',age='$age',date_b='$datb',phone='$phone',accidnt_t='$actype',adres='$adrs'
,datee='$datee',time='$time',pdie='$pdie',content='$con' 
WHERE fill_id='$fil'") ;
if($sql)
{
         echo"<p style='color:green;margin-left:150px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Saved!"."</p>";


      }
      else
      {
          echo"<p style='color:red;margin-left:110px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Saved!"."</p>";
        
     }
      }

?>
</div>
</body>
</html>