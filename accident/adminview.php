
<?php
session_start();
if(isset($_SESSION['admin']))
{
  echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b>  ".$_SESSION['u_namee']."</p>";
  

}else{
header("refresh:0 url=index.php");

}

?>


<?php include"conn.php"; ?>
<!--conection including-->



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
 <link rel="stylesheet" type="text/css" href="css/shit.css">
</head>
<style>

table{
 border-radius:10px;
}
  .send{
  	position:absolute;
  	margin-top:150px;
  	margin-left:250px;

  }
   #tabl{
    width:390px;
    border-radius:15px;
    border-color: grey;
    padding:4px;
    margin-left:900px;
    margin-right:10px;
    top:170px;
    position:relative;
  }
  .inrepo{
     margin-left:350px;
    margin-top:170px;
    position:absolute;
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
      <li ><a href="index.php" data-toggle="tooltip" title="Home!">    <i class="fas fa-home"></i>Home</a></li>
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
 
<?php


$data=mysql_query("SELECT *FROM useracount")or die (mysql_error());
$count = ($data? mysql_affected_rows():0);
?>



 <h2><b  style="margin-left:400px;">Welcome </b></h2>
    <div class="tas">
    <button type="button" class="btn btn-default"><a href="post.php"><i class="fas fa-share-square"></i>&nbsp;Post information</a></button>
   <br>
  
    <button type="button" class="btn btn-default"><a href="view.php"><i class="fas fa-eye"></i>&nbsp;View report</a></button>
    <br>
    <button type="button" class="btn btn-default"><a href="openreq.php"><i class="fas fa-envelope-open-text"></i>&nbsp;Open Request(<?php echo "<b style='color:red'>".$count."</b>"; ?>)</a></button>
 <br>
    <button type="button" class="btn btn-default"><a href="allocat.php"><i class="fab fa-sourcetree"></i>&nbsp;Allocate resourse</a></button>
 <div class="dropdown">
     <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fas fa-list"></i> &nbsp; Manage Account
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="creat.php"><i class="fas fa-plus"></i> &nbsp; Add new user accunt</a></li>
      <br>
      <li><a href="updat.php"><i class="fas fa-edit"></i> &nbsp;Edit User accunt</a></li>
      <br>
      <li><a href="delete.php"><i class="fas fa-trash-alt"></i> &nbsp;Delete Useraccunt</a></li>
        <br>
      <li><a href="adminview.php"><i class="fas fa-eye"></i> &nbsp;View user accunt</a></li>
    </ul>
  </div>
  </div>
  

</div>



<script type="text/javascript">
function vali(){
   var content=document.getElementById('content').value;
  if(content==""){
         document.getElementById('ad').innerHTML="Please Fill Your report!";
         return false;
       }
     
    
       
     }
</script>




   
          <div class ="inrepo">
        <?php

  echo "<table border=1 style='width:500px;margin:left:500px;position:absolute;'>";
  echo "<tr>";

  echo "<th>"; echo "Frist name"; echo "</th>";
  echo "<th>"; echo "Last name"; echo "</th>";
  echo "<th>"; echo "sex"; echo "</th>";
  echo "<th>"; echo "Phone"; echo "</th>";
  echo "<th>"; echo "Email"; echo "</th>";
  echo "<th>"; echo "User name"; echo "</th>";
   echo "<th>"; echo "Password"; echo "</th>";
  echo "<th>"; echo "User type"; echo "</th>";

  echo "</tr>";
 while($row=mysql_fetch_array($data))
     {
      $bi=$row['psww'];

      echo "<tr>";
         echo "<td>"; echo"<p style=' font-size: 16px;color:black;'>"; echo $row['fnamee']; echo"</p>";echo "</td>";
         echo "<td>"; echo"<p style=' font-size: 16px;color:black;'>";echo $row['lnamee']; echo"</p>";echo "</td>";
      echo "<td>"; echo"<p style=' font-size: 16px;color:black;'>";echo $row['sexx']; echo"</p>";echo "</td>";
       echo "<td>"; echo"<p style=' font-size: 16px;color:black;'>";echo $row['phonee']; echo"</p>";echo "</td>";
 
      echo "<td>"; echo"<p style=' font-size: 16px;color:black;'>";echo $row['emaile']; echo"</p>";echo "</td>";
       echo "<td>";echo"<p style=' font-size: 16px;color:black;'>"; echo $row['u_namee'];echo"</p>";echo "</td>";
      echo "<td>"; echo"<p style=' font-size: 16px;color:black;'>";echo base64_encode($row['psww']); echo"</p>";echo "</td>";
       echo "<td>"; echo"<p style=' font-size:16px;color:black;'>";echo $row['usertypee']; echo"</p>";echo "</td>";

       echo "</tr>";
    
}
echo"</table>";
          ?>
          </div>
</html>