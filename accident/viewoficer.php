
<?php
session_start();
if(isset($_SESSION['Officer']))
{
  
 echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b>  ".$_SESSION['u_namee']."</p>";

}else{
  header("refresh:1 url=index.php");
}

?>




<?php include"conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
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
 <link rel="stylesheet" type="text/css" href="css/shit.css">
</head>
<style>

body {
     
     <!-- background-image:url("T:/image/psbanner/img_big.png");-->
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
      <li ><a href="#" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i> Home</a></li>
      <li ><a href="#"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i> News </a></li>
      <li><a href="#"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i> Contact us</a></li>
      <li><a href="#"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>About us</a></li>
        <ul class="navbar-right">
      <li><a href="index.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i>     Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>
 


       


 <h2><b  style="margin-top:140px;margin-left:400px;font-size:24px;">Welcom request page</b></h2>

  <?php

     $dataa=mysql_query("SELECT *FROM tmtoofi ORDER BY id ")or die (mysql_error());
    $count = ($dataa? mysql_affected_rows():0);

   

//$dataaa=mysql_query("SELECT *FROM resourc_a")or die (mysql_error());
//$coun = ($dataaa? mysql_affected_rows():0);



   ?>

    <div class="tas">
     
    <button type="button" class="btn btn-default"><a href="emergnrpo.php"><i class="fas fa-paper-plane"></i>&nbsp; Emergency report</a></button>
   <br>
    <button type="button" class="btn btn-default"><a href="viewoficer.php"><i class="fas fa-eye"></i> &nbsp;  View report<?php echo "<b style='color:red'>(".$count.")</b>"; ?></a></button>
     <br>
  <button type="button" class="btn btn-default"><a href="changefildoficer.php"><i class="fas fa-edit"></i> &nbsp;Change Password</a></button>
   
 
  </div>

<div class="view">

<?php

  echo "<table border=1 style='width:750px;  position:absolute;'>";
  echo "<tr>";

  echo "<th>"; echo "Id"; echo "</th>";
  echo "<th>"; echo "From"; echo "</th>";
  echo "<th>"; echo "content"; echo "</th>";
  echo "<th>"; echo "Action"; echo "</th>";
  echo "</tr>";

  $result = mysql_query("SELECT * FROM tmtoofi ");
 if(mysql_num_rows($result)>0){

 while($row=mysql_fetch_array($dataa))
     {
      echo "<tr>";
      echo "<td>"; echo $row['id']; echo " ";echo "</td>";
      echo "<td>"; echo "Temcontroler";echo "</td>";
      echo "<td>"; echo $row['cont']; echo "</td>";
       ?>
      <td><a href="deleteoficertotm.php?slide=<?php echo $row['id'];?>"><i style="width:50px;hieght:50px;color:red;"class="far fa-trash-alt"></i></a>
      <?php
      echo "</tr>";
    }
  }
 ?>
 
</div>

</html>