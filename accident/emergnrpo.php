
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
 
  
   
<script src="bootstrap_css/js/bootstrap.min.js"></script>
<script src="bootstrap_css/font/js/all.js"></script>
  
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/input.css">
 <link rel="stylesheet" type="text/css" href="css/shit.css">
</head>
<style>

span{
  margin-left:80px;

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
      <li ><a href="#" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i>Home</a></li>
      <li ><a href="#"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i> News </a></li>

      <li><a href="#"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i> Contact us</a></li>
      <li><a href="#"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>About us</a></li>
        <ul class="navbar-right">
      <li><a href="index.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i>Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>
 
 <h2><b  style="margin-top:140px;margin-left:400px;font-size:24px;">Emergency report</b></h2>
    <div class="tas">
    

    <button type="button" class="btn btn-default"><a href="emergnrpo.php"><i class="fas fa-paper-plane"></i>&nbsp;Emergency report</a></button>
   <br>
    <button type="button" class="btn btn-default"><a href="viewoficer.php"><i class="fas fa-eye"></i> &nbsp; View report</a></button>
   <br>
  <button type="button" class="btn btn-default"><a href="changefildoficer.php"><i class="fas fa-edit"></i> &nbsp;Change Password</a></button>
     
  </div>
  <script type="text/javascript">
function vali(){
   var name=document.getElementById('name').value;
    var content=document.getElementById('content').value;
    

   if(name==""){
         document.getElementById('ab').innerHTML="Please Fill Your name!";
         return false;
       }
       if(name.length<4){
         document.getElementById('ab').innerHTML="Your entrerd data is not name!";
         return false;
       }

        if(content==""){
         document.getElementById('ac').innerHTML="Please Fill Your report!";
         return false;
       }
     
    
       
     }
</script>
  <div class="sreport">
<form name="myform"  method="POST">
<lable style="margin-left:0px;"><b>Name Of officer</b></lable>
<br>
<input type="text" name="namee" id ="name" class="form-control"placeholder="your_name" style="width:200px;">
 <span id="ab"class="text-danger font-weight-bold"></span>
<br>
<lable style="margin-left:0px;"><b>&nbsp;&nbsp;Report content</b></lable>
<textarea type="text"name="contentt" id ="content"class="form-control"placeholder="Content....."></textarea>
 <span id="ac"class="text-danger font-weight-bold"></span>
<br>
<button type="submit" name="save"onclick="vali()"class="btn btn-default" value="Submit"><i class="fas fa-paper-plane"></i>Send</button>
</form>
</div>
</html>

<?php
include"conn.php";
  
if(isset($_POST['save'])){
  
$name=$_POST['namee'];
$rport=$_POST['contentt'];

$name=mysql_real_escape_string($name);
$rport=mysql_real_escape_string($rport);

if(empty($cont)||
   empty($rport))
          { 
  echo" ";
         }
$sql= mysql_query("INSERT INTO emrgncyrpo (name,report) VALUES ('$name','$rport')");
if(!$sql){
  echo"<p style='color:red;margin-left:430px;margin-top:540px;position:absolute;overflow:visible;'>"."Your Data not send!"."</p>";
}else{
        echo"<p style='color:green;margin-left:430px;margin-top:540px;position:absolute;overflow:visible;'>"."Your Data send!"."</p>";

}


}
?>

