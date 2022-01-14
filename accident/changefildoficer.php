
<?php
session_start();
if(isset($_SESSION['Officer']))
{
  
 echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b>  ".$_SESSION['u_namee']."</p>";

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
 <link rel="stylesheet" type="text/css" href="css/chang.css">



<style>

span{
  margin-left:75px;
position:auto;
}

i{
  
  margin-left:370px;
}
  
</style>



</head>

<body>

<nav id="home"class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <h style="margin-top:30px;"><b><img src="b.png" style="width:500px;height:50px;margin-top:0px;"></b></h1>
    </div>

    <div class="top"> 
    <ul class=" navbar"style="">
      <li ><a href="index.php" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i>Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i>   News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>  Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span> About us</a></li>
        <ul class="navbar-right">
      <li><a href="logout.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>

     <div class="tas">
    
    <button type="button" class="btn btn-default"><a href="emergnrpo.php"><i class="fas fa-paper-plane"></i>&nbsp; Emergency report</a></button>
   <br>
    <button type="button" class="btn btn-default"><a href="viewoficer.php"><i class="fas fa-eye"></i> &nbsp;  View report</a></button>
    <br>
  <button type="button" class="btn btn-default"><a href="changefildoficer.php"><i class="fas fa-edit"></i> &nbsp;Change Password</a></button>
 
  </div>

 

<script type="text/javascript">
function vali(){
    var email=document.getElementById('email').value;

    if(email==""){
         document.getElementById('em').innerHTML="Email is empty";
         return false;
       }
       if(email.indexOf('@')<=0){
         document.getElementById('em').innerHTML="Fill proper email format @";
         return false;
       }

       
     }
</script>


 

  <h1 style="margin-left:400px;font-size:24px;"><b>Change user name And password </b></h1>
  <div class="chang">

  <form name="myform" method="POST">

<div class ="formgr">
   <b>Email<a style="color:red;">*</a></b>
   <input  style="margin-left:35px;" id="email" class="form-control"type="text"name="password" placeholder="Enter your E-mail  Id ">
   <span id="em"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<b >New UserName<a style="color:red;">*</a></b>
    <input type="text"class="form-control"id="nusr" name="firstname"placeholder="EnterNewUserName">
    <span id="ac"class="text-danger font-weight-bold"></span>
</div>


    <b style="text:bold">New Password<a style="color:red;">*</a></b>
     <input  class="form-control"type="password" id="npsw" name="passwordd" placeholder="Enter Newpassword"><br />
  <span id="ad"class="text-danger font-weight-bold"></span>


   <button type="submit" name="update"onclick ="vali()"class="btn btn-default" value="Submit">Confirm</button>
  </form>
  
 <?php
include"conn.php";

if(isset($_POST['update'])){


  $psw=$_POST['password'];
   $nusr=$_POST['firstname'];
   $npsw=$_POST['passwordd'];

   $psw=mysql_real_escape_string($psw);
   $nusr=mysql_real_escape_string($nusr);
   $npsw=mysql_real_escape_string($npsw);

   if(empty($psw) || 
        empty($nusr)||
            empty($npsw))
          { 
   echo" ";
         }

   $sql=mysql_query("UPDATE useracount set u_namee='$nusr',psww='$npsw'WHERE emaile='$psw'") ;
if(!$sql)
{
           echo"<p style='color:red;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Not mache!"."</p>";


      }
      else
      {
         echo"<p style='color:red;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data is Successfuly changed!"."</p>";
         // $error_msg="Saved!";
        
     
      }
    }
   ?>
</div>






</body>
</html>







