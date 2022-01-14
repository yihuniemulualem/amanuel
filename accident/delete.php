<?php
session_start();
if(isset($_SESSION['admin']))
{
  echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b>  ".$_SESSION['u_namee']."</p>";
  

}else{
header("refresh:0 url=index.php");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KCPS</title>
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
 <link rel="stylesheet" type="text/css" href="css/creat.css">
</head>
<style>

span {
  margin-left:100px;
}
  #btn{
  
  font-size:15px;
  color:red;
  margin-left:100px;
  
}

.fin{
  font-size:15px;
  color:red;
  margin-left:150px;

}
</style>
</head>

<body>

<nav id="home"class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <h1 style="margin-top:30px;"><b><img src="b.png" style="width:500px;height:50px;margin-top:0px;"></b></h1>
    </div>





    <div class="top"> 
    <ul class=" navbar"style="">
      <li ><a href="index.php" data-toggle="tooltip" title="Home!">  <i class="fas fa-home"></i>Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i> News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i> Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span> About us</a></li>
        <ul class="navbar-right">
      <li><a href="logout.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i>Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>
   
    <div class="tas">
    <button type="button" class="btn btn-default"><a href="post.php"><i class="fas fa-share-square"></i>&nbsp;Post information</a></button>
   <br>
    <button type="button" class="btn btn-default"><a href="view.php"><i class="fas fa-eye"></i>&nbsp;View report</a></button>
    <br>
    <button type="button" class="btn btn-default"><a href="openreq.php"><i class="fas fa-envelope-open-text"></i>&nbsp;Open Request</a></button>
    <br>
    <button type="button" class="btn btn-default"><a href="allocat.php"><i class="fab fa-sourcetree"></i>&nbsp;Allocate resourse</a></button>
 <div class="dropdown">
     <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fas fa-list"></i> &nbsp; Manage Account
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="creat.php"><i class="fas fa-plus"></i> &nbsp; Add user account</a></li>
      <br>
      <li><a href="updat.php"><i class="fas fa-edit"></i> &nbsp;Edit User account</a></li>
      <br>
      <li><a href="delete.php"><i class="fas fa-trash-alt"></i> &nbsp;Delete User account</a></li>
        <br>
      <li><a href="adminview.php"><i class="fas fa-eye"></i> &nbsp;View user account</a></li>
    </ul>
  </div>
  </div>


  

     <script type="text/JavaScript">

     function vali(){


      var phone=document.getElementById('phon').value;
      var email=document.getElementById('emai').value;


    if(phone==""){
         document.getElementById('big').innerHTML="Please fill phone number";
         return false;
         
 }
 if(phone.length<10){
         document.getElementById('big').innerHTML="Phone number must be 10 degit!";
         return false;
       }
        if(phone.length>10){
         document.getElementById('big').innerHTML="Phone number must be 10 degit!";
         return false;
       }
       
       if(phone.charAt(0)!=0){
         document.getElementById('big').innerHTML="Phone start at 0 please!";
         return false;
       }

        if(phone.charAt(1)!=9){
         document.getElementById('big').innerHTML="Phone start at 09 please!";
         return false;
       }

        if(email==""){
         document.getElementById('bg').innerHTML="Please fill email id";
         return false;
       }
      
     }
       </script>




   

 
<div class="delete">
<form name="myform"  method ="POST">
<div class="formg">
<label><b>Phone<a >*</a></b></label>
<input type="number"name="phone"id="phon"style="width:300px;"class="form-control"placeholder="0920790583">

<span id="big" class="text-danger font-weight-bold"></span>
</div>

<button onclick="vali()"type="submit" name="delete" style="width:100px;margin-left:120px;" class="btn btn-default" value="Submit">Delete</button>
<br>


 
</form>
 <?php
include"conn.php";





if(isset($_POST['delete']))
{

$phone=$_POST['phone'];


$phone=mysql_real_escape_string($phone);



if(empty($phone))
    {

       echo" ";
   }
 
$sql=mysql_query("DELETE FROM useracount WHERE phonee='$phone'");

if(!$sql)
{
  echo"<p style='color:red;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data is Deleted!"."</p>";
}
else
{
  echo"<p style='color:green;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Deleted!"."</p>";

//echo"Deleted!";
}



}

?>

</div>

</html>