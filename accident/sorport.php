

<?php



?>
<!DOCTYPE html>
<html>
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

  <link rel="stylesheet" type="text/css" href="css/input.css">
</head>

<style>

.fin{
  font-size:15px;
  color:red;
  margin-left:220px;

}
  
</style>
</head>




<nav id="home"class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="icon/etho.jpg"  style="width:30px;height:30px;">
      <h1 style="margin-top:0px;"><b><img src="b.png" style="width:500px;height:50px;margin-top:0px;"></b></h1>
    </div>
    






    <div class="top"> 
    <ul class=" navbar"style="">
     <li ><a href="index.php" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i>Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i>News </a></li>
       <li><a href="sorport.php"data-toggle="tooltip" title="Report"><i class="fas fa-pen-square"></i>Report</a></li>
      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>About us</a></li>
        <ul class="navbar-right">
      <li><a href="login.php"data-toggle="tooltip" title="Login"><i class="fas fa-sign-in-alt"></i>Login</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>



<!-- VALIDATION-->


<script type="text/javascript">


function vali(){


   var name=document.getElementById('name').value;
     var phone=document.getElementById('phone').value;
       var content=document.getElementById('content').value;
    

   if(name==" "){
         document.getElementById('ab').innerHTML="Please Fill Your name!";
         return false;
       }
       if(name.length<4){
         document.getElementById('ab').innerHTML="Your entrerd data is not name!";
         return false;
       }


    if(phone==""){
         document.getElementById('ac').innerHTML="Please Fill Your phone number!";
         return false;
       }

       if(phone.length<10){
         document.getElementById('ac').innerHTML="Phone number must be 10 degit!";
         return false;
       }
        if(phone.length>10){
         document.getElementById('ac').innerHTML="Phone number must be 10 degit!";
         return false;
       }
       
       if(phone.charAt(0)!=0){
         document.getElementById('ac').innerHTML="Phone start at 0 please!";
         return false;
       }

        if(phone.charAt(1)!=9){
         document.getElementById('ac').innerHTML="Phone start at 09 please!";
         return false;
       }


        if(content==""){
         document.getElementById('ad').innerHTML="Please Fill Your report!";
         return false;
       }
     
    
       
     }
</script>







<div class="sreportt">
<form name="myform" action="" method="POST">

<div class ="formgr">
<lable><b>&nbsp;&nbsp;Name</b></lable>
<input type="text" name="namee" id ="name" class="form-control"placeholder="your name">
<span id="ab"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<lable><b>&nbsp;&nbsp;Phone</b></lable>
<input type="number"name="phone" id ="phone"class="form-control"placeholder="0920790583">
<span id="ac"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<lable><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report content/type</b></lable>
<textarea type="text"name="contentt" id ="content" class="form-control"placeholder="Content....."></textarea>
<span id="ad"class="text-danger font-weight-bold"></span>
</div>
<button type="submit" name="submitt"style="margin-left:200px;width:100px;margin-top:3px;"onclick="vali()" class="btn btn-default" value="Submit"><i class="far fa-paper-plane"></i><a href="#">Send</a></button>
<br>

</form>

<?php
include"conn.php";

if(isset($_POST['submitt'])){
  
       $uname=$_POST['namee'];
       $phone=$_POST['phone'];
       $cont=$_POST['contentt'];

$uname=mysql_real_escape_string($uname);
$phone=mysql_real_escape_string($phone);
$cont=mysql_real_escape_string($cont);

if(empty($uname) || 
            empty($phone)||
            empty($cont))
          { 
          echo" ";
         }
          else{
  //  $sq1="INSERT INTO sreport(usern,phone,conntent) VALUES ('$uname','$phone','$cont')";

  
    $sq2="INSERT INTO notifi(usern,phone,content) VALUES ('$uname','$phone','$cont')";
            // $res=mysql_query($sq1);
             $res=mysql_query($sq2);
 if(!$res){
   echo  mysql_error();
 }
 else{

        echo"<p style='color:red;margin-left:200px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data send!"."</p>";

}
 }
}
?>
</div>
</html>



