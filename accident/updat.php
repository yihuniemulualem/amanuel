
<?php
session_start();
if(isset($_SESSION['admin']))
{
  echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b>  ".$_SESSION['u_namee']."</p>";
  

}else{
header("refresh:1 url=index.php");

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

<style>


span{
  margin-left:110px;
}

.fin{
  font-size:15px;
  color:red;
  margin-left:150px;

}
</style>







<script type="text/javascript">

function vali(){
  var fname=document.getElementById('fname').value;
   var lname=document.getElementById('lname').value;
    var phone=document.getElementById('phone').value;
     var email=document.getElementById('email').value;
      var user=document.getElementById('user').value;
       var psw=document.getElementById('psw').value;


   if(phone==""){
         document.getElementById('ph').innerHTML="Plase fill Phone number!";
         return false;
       }
     
       if(isNaN(phone)){
         document.getElementById('ph').innerHTML="Please fill Only Number!";
         return false;
       }
            if(phone.length<10){
         document.getElementById('ph').innerHTML="Phone number must be 10 degit!";
         return false;
       }
        if(phone.length>10){
         document.getElementById('ph').innerHTML="Phone number must be 10 degit!";
         return false;
       }
       
       if(phone.charAt(0)!=0){
         document.getElementById('ph').innerHTML="Phone start at 0 please!";
         return false;
       }

        if(phone.charAt(1)!=9){
         document.getElementById('ph').innerHTML="Phone start at 09 please!";
         return false;
       }


//

       if(fname==""){
         document.getElementById('na').innerHTML="First name is empty";
         return false;
       }
          if((fname.length<4)|| (fname.length>15)){
            document.getElementById('na').innerHTML="PLZ fill between 4-15";
         return false;
       }
       if(!isNaN(fname)){
           document.getElementById('na').innerHTML="Only characher allowed ";
         return false;
       }
          if(lname==""){
         document.getElementById('ln').innerHTML="Last name is empty";
         return false;
       }
       if((lname.length<4)|| (lname.length>15)){
            document.getElementById('ln').innerHTML="PLZ fill between 4-15";
         return false;
       }
       if(!isNaN(lname)){
           document.getElementById('ln').innerHTML="Only characher allowed ";
         return false;
       }
      
  
  //

    

          if(email==""){
         document.getElementById('em').innerHTML="Email is empty";
         return false;
       }
       if(email.indexOf('@')<=0){
         document.getElementById('em').innerHTML="Fill proper email format @";
         return false;
       }
       
          if(user==""){
         document.getElementById('us').innerHTML="Fill user name";
         return false;
       }
   
          if(psw==""){
         document.getElementById('pw').innerHTML="Fill passowrd";
         return false;
       }
}
</script>
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
      <li ><a href="index.php" data-toggle="tooltip" title="Home!"> <i class="fas fa-home"></i>Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i>News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>Contact us</a></li>
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
    <button type="button" class="btn btn-default"><a href="post.php"><i class="fas fa-envelope-open-text"></i>&nbsp;Open Request</a></button>
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
 


  <div class="creat">
    <form name ="myform" action="#" method="POST">

    <div class="formg">
      <lable for="usr"style="margin-left:100px;color:red;">Phone<a >*</a></lable>
        <input type="number" style="margin-left:2px;width:180px;"class="form-control"id="phone" name="phonee"placeholder="0920790583"title="phone">
            <span id="ph"class="text-danger font-weight-bold"></span>
       </div>

       <div class="formg">
        <lable><b>First Name<a style="color:red;">*</a></b></lable>
        <input type="text" style="  margin:7px;"class="form-control"id="fname" name="firstname"placeholder="FirstName"title="firstname">
      <span id="na"class="text-danger font-weight-bold"></span>
       </div>

       <div class="formg">
        <lable ><b>Last Name<a style="color:red;">*</a></b></lable>
        <input type="text" style="  margin:8px;" class="form-control"id="lname" name="lasttname"placeholder="Lastname"title="Lastname">
       <span id="ln"class="text-danger font-weight-bold"></span>
       </div>

       <div class="formg">
        <label><b>Sex<a style="color:red;">*</a></b></label>
        <select name="sexx"type="option"style="height:39px;font-size:13px;margin-left:60px;width:100px;">
           
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        
        </div>


       <div class="formg">
         <lable for="usr"><b>Email<a style="color:red;">*</a></b></lable>
        <input type="text" class="form-control"id="email" name="email"placeholder="E_mail"title="Email">
      <span id="em"class="text-danger font-weight-bold"></span>
      </div>

      <div class="formg">
        <lable for="usr"><b>User_Name<a style="color:red;">*</a></b></lable>
        <input type="text"style="  margin:9px;" class="form-control"id="user" name="User"placeholder="User_Name"title="UserName">
        <span id="us"class="text-danger font-weight-bold"></span>
        </div>

        <div class="formg">
        <lable for="Pwd"><b>Password<a style="color:red;">*</a></b></lable>
        <input type="Password" class="form-control"id="psw" name="password"placeholder="Password"title="Password">
        <span id="pw"class="text-danger font-weight-bold"></span>
      </div>

        <button type="submit" name="update"onclick ="vali()"class="btn btn-default" value="Submit"><i class="far fa-save"></i>Save</button>
       <br>
      
    </form>
     <?php
include"conn.php";?>


 <?php
if(isset($_POST['update'])){


  $ph=$_POST['phonee'];
   $fn=$_POST['firstname'];
    $ln=$_POST['lasttname'];
     $sex=$_POST['sexx'];
      $email=$_POST['email'];
       $User=$_POST['User'];
        $psw=$_POST['password'];

$fn=mysql_real_escape_string($fn);
$ln=mysql_real_escape_string($ln);
$sex=mysql_real_escape_string($sex);
$ph=mysql_real_escape_string($ph);
$email=mysql_real_escape_string($email);
$User=mysql_real_escape_string($User);
$psw=mysql_real_escape_string($psw);

if(empty($fn) || 
   empty($ln) ||
   empty($sex) ||
   empty($ph) ||
   empty($email) ||
   empty($User) ||
   empty($psw))
   {
     echo" ";
   }
   else
   {
     
   
$sql=mysql_query("UPDATE useracount set fnamee='$fn',lnamee='$ln',sexx='$sex',phonee='$ph',emaile='$email',u_namee='$User',psww='$psw' 
WHERE phonee='$ph'") ;
if(!$sql)
{
          echo"<p style='color:red;margin-left:110px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Saved!"."</p>";


      }
      else
      {
       echo"<p style='color:green;margin-left:110px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Saved!"."</p>";
        
     
      }
    }
}
 ?>
</div>
    </body>
    </html>
