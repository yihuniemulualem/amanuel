
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
 <link rel="stylesheet" type="text/css" href="css/chang.css">


</head>
<style>

span{
  margin-left:75px;
position:auto;
}
  .foter{
    margin-top:563px;
   position:absolute;

}
i{
  
  margin-left:370px;
}
  
</style>





<body>

<nav id="home"class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <h1 style="margin-top:30px;"><b><img src="b.png" style="width:500px;height:50px;margin-top:0px;"></b></h1>
    </div>

    <div class="top"> 
  
    <ul class=" navbar"style="margin-left:460px;">
      <li ><a href="#" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i>Home</a></li>
      <li ><a href="#"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i>    News </a></li>

      <li><a href="#"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>  Contact us</a></li>
      <li><a href="#"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span> About us</a></li>
        <ul class="navbar-right">
      <li><a href="index.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i>Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>

    <div class="tas">
    <button type="button" class="btn btn-default"><a href="change.php"><i class="fas fa-edit"></i> &nbsp;Change password</a></button>
 <br>
    <button type="button" class="btn btn-default"><a href="viewf.php"><i class="fas fa-eye"></i>&nbsp; View request</a></button>
<br>
 <button type="button" class="btn btn-default"><a href="send.php"><i class="fas fa-paper-plane"></i>&nbsp;Send request</a></button>
 <div class="dropdown">
     <button class="btn btn-default dropdown-toggle"style="color:#23527c;" type="button" id="menu1" data-toggle="dropdown"><i class="fas fa-list"></i> &nbsp; Manage File
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="add.php"><i class="fas fa-plus"></i> &nbsp;Add file</a></li>
    
      <li><a href="updatef.php"><i class="fas fa-edit"></i> &nbsp;Update file</a></li>
   
      <li><a href="deletf.php"><i class="fas fa-trash-alt"></i> &nbsp;Delete file</a></li>
  
      <li><a href="viewfill.php"><i class="fas fa-eye"></i> &nbsp; View accident file</a></li>
    </ul>
  </div>
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


 

  <h1 style="margin-left:400px;font-size:24px;"><b>Change user name password </b></h1>
  <div class="chang">

  <form name="myform" method="POST">

<div class ="formgr">
   <b>Phone<a style="color:red;">*</a></b>
   <input  style="margin-left:35px;" id="email" class="form-control"type="text"name="password" placeholder="09........">
   <span id="em"class="text-danger font-weight-bold"></span>
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
 
   $npsw=$_POST['passwordd'];

   $psw=mysql_real_escape_string($psw);
 
   $npsw=mysql_real_escape_string($npsw);

   if(empty($psw) || empty($npsw))
          { 
   echo" ";
         }

   $sql=mysql_query("UPDATE useracount set psww='$npsw'WHERE phonee='$psw'") ;
if(!$sql)
{
           echo"<p style='color:red;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Not mache!"."</p>";


      }
      else
      {
         echo"<p style='color:green;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Saved!"."</p>";
         // $error_msg="Saved!";
        
     
      }
    }
   ?>
</div>



<div class="foter">
<hr style="width:1345px;height:1px;background-color:#fff;">
<p style="margin-left:300px;"> Copyright &copy; <?php echo date("Y"); ?> <font color ="black" size="3">All rights reserved. Design by CS 4rd year student</a>.

<i><a href="https://www.facebook.com/"data-toggle="tooltip" title="Facebook"><img src="icon/fb.png"  style="width:40px;height:40px;"></a>
<a href="https://www.instagram.com/"data-toggle="tooltip" title="instagram"><img src="icon/insta.png"  style="width:40px;height:40px;"></a>
<a href="https://www.youtube.com/"data-toggle="tooltip" title="youtube"><img src="icon/you.png"  style="width:40px;height:40px;">
<a href="https://twitter.com/"data-toggle="tooltip" title="twiter"><img src="icon/twtr.png"  style="width:40px;height:40px;"></a></i></p>
<p id="sosial">

</p>
 
</div>


</body>
</html>









