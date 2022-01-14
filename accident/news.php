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

</head>
<style>

td{

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
      <li ><a href="index.php" data-toggle="tooltip" title="Home!"> <i class="fas fa-home"></i>Home</a></li>
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




<!--
<div class="learn">
<h4><b style="color:red;">Notes</b></h4>
<table border="1" style="width:100%">
<tr>
<p style="padding:5px;color:red;">
ORDER BY Several Columns Example 2
The following SQL statement selects all customers from the "Customers" table, sorted ascending by the "Country" and descending by the "CustomerName" column:

</tr>
</table>
</div>
-->
<div class="newlearn">
<h3 style="margin-left:250px;margin-right:450px;"><b>This is our news</b></h3>
<div class="new">






<?php
include"conn.php";

  echo "<table  style='width:550px;  position:absolute;'>";
   $sql="SELECT * FROM post";
   $res =mysql_query($sql);
  
      
     while($row=mysql_fetch_array($res))
     { 
    
       echo" <tr>";
      
       echo"<td style='font-size:20px;color:blue;text-decoration: underline;text-align:center;'>";echo $row["title"];
       echo"  <br>";
          echo"  <br>";
       echo" </td>";
       echo" </td>";
       echo" </tr>";
       echo"  <td style='width:500px;'>"; echo"<p style='width:650px; text-align: justify;'>";echo $row["post"];echo"</p>"; 
         echo" </td>";
       echo" </tr>";
       echo" <br>";
       echo" <tr>";
    ?>  
       <td><br><br><img src="picture/<?php echo $row["imag"]; ?>" style="width:200px;height:200px;">
       <?php 
       echo"<br>";
       echo"<br>";
        echo" </tr>";
        
     }
     ?>

  



</div>
</div>
</body>
</html>