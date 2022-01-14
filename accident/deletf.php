

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
</head>




<style>
span{
  margin-left:100px;
}
#but{
  margin-left:100px;
  width:90px;
  margin-top:1px;
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
      <li ><a href="index.php" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i>  Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i> News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>About us</a></li>
        <ul class="navbar-right">
      <li><a href="logout.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>
 

    <div class="tas">
    <button type="button" class="btn btn-default"><a href="change.php"><i class="fas fa-edit"></i> &nbsp;Change password</a></button>
 <br>
    <button type="button" class="btn btn-default"><a href="viewf.php"><i class="fas fa-eye"></i>&nbsp;View request</a></button>
<br>
 <button type="button" class="btn btn-default"><a href="send.php"><i class="fas fa-paper-plane"></i>&nbsp; Send request</a></button>
 <div class="dropdown">
     <button class="btn btn-default dropdown-toggle"style="color:#23527c;" type="button" id="menu1" data-toggle="dropdown"><i class="fas fa-list"></i> &nbsp; Manage File
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="add.php"><i class="fas fa-plus"></i> &nbsp; Add file</a></li>
    
      <li><a href="updatef.php"><i class="fas fa-edit"></i> &nbsp; Update file</a></li>
   
      <li><a href="deletf.php"><i class="fas fa-trash-alt"></i> &nbsp; Delete file</a></li>
  
      <li><a href="viewfill.php"><i class="fas fa-eye"></i> &nbsp;  View accident file</a></li>
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
     }
</script>







<div class="heding">
<h1><b style="font-size:24px;">You can Delete a file by using file id</b></h1>
</div>
<div class="deletf">
<form name="myform" method="POST">

<div class ="formgr">
<b style ="position:absolute;">File ID<a style="color:red;">*</a></b>
<input type="text"name="file" id ="fil" placeholder="File id"class="form-control">
 <span id="ab"class="text-danger font-weight-bold"></span>
</div>
<button type="submit"name="delete"onclick="vali()" id="but"class="btn btn-default" value="Submit"><i style="color:red;"class="far fa-trash-alt"></i>Delete</button>

</form>
  <?php
include"conn.php";
if(isset($_POST['delete']))
{

$file=$_POST['file'];

$file=mysql_real_escape_string($file);


if(empty($file))
    {

       echo" ";
   }
   else{
$sql=mysql_query("DELETE FROM tview WHERE fill_id='$file'");

if(!$sql)
{
  echo"<p style='color:red;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data is Deleted!"."</p>";
}
else
{
 echo"<p style='color:green;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data is Deleted!"."</p>";
}

}

}

?>

</div>
</body>
  </html>