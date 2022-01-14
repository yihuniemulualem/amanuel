
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
     <link rel="stylesheet" type="text/css" href="css/pos.css">
</head>


<style>

span{
  margin-left:80px;
}


.fin{
  font-size:15px;
  color:red;
  margin-left:150px;

}
.foter{
    margin-top:650px;
   position:absolute;

}
i{
  
  margin-left:300px;
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
      <li ><a href="index.php" data-toggle="tooltip" title="Home!">  <i class="fas fa-home"></i>Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i>News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><i class="fas fa-sign-in-alt"></i>About us</a></li>
        <ul class=" navbar-right">
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



<script type="text/javascript">
function vali(){
  var titl=document.getElementById('titl').value;
    var cont=document.getElementById('cont').value;
if(titl==""){
         document.getElementById('ab').innerHTML="Please Fill title!";
         return false;
       }
     
     if(cont==""){
         document.getElementById('ac').innerHTML="Please Fill the content!!";
         return false;
       }

       
     }
</script>


  


  <h5 style="margin-top:100px;position:absolute;margin-left:400px;font-size:20px;">Post some information</h5>
  <div class="post">

  
<form name ="myform"action="#" method ="POST">

<div class ="formgr">
<b>Post Tittle </b>
 <input type="text"style=""name="title" id ="titl"class="form-control"title=""placeholder="Title of content">
 <span id="ab"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
 <lable><b>Post Content</lable>
<textarea type="text_area"name="contentt" id ="cont"class="form-control"placeholder="Content...."></textarea>
 <span id="ac"class="text-danger font-weight-bold"></span>
</div>

<div class ="formgr">
<lable><b>Images</lable>
<input type="file"name="imag"class="form-control">
</div>
<button type="submit" name="postt"onclick="vali()"class="btn btn-default" value="Submit"id="but"><i class="fas fa-share-square"></i>Submit</button>
<span id="error"class="text-danger font-weight-bold"></span>
<span id="success"class="text-success font-weight-bold"></span>


</form>
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



<?php
include"conn.php";




if(isset($_POST['postt']) )
{



$title=$_POST['title'];
$post=$_POST['contentt'];
$imag=$_POST['imag'];

$title=mysql_real_escape_string($title);
$post=mysql_real_escape_string($post);
$imag=mysql_real_escape_string($imag);

if(empty($title) || 
   empty($post) ||
   empty($imag))
   {
     echo " ";
   }

$qurey = mysql_query("INSERT INTO post (title,post,imag) 
 VALUES ('$title','$post','$imag')"); 

      if(!$qurey) {
          echo "<script>alert('Your data is not Send!');window.location='post.php'</script>";

      }
      else
      {
      
          echo "<script>alert('Your data is Send!');window.location='post.php'</script>";
        
      }
       

}

?>

