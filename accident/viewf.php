
<?php
session_start();
if(isset($_SESSION['Teamcontroler']))
{
  
 echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b> ".$_SESSION['u_namee']."</p>";

}else{
header("refresh:1 url=index.php");

}

?>

<?php include"conn.php"; ?>


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
 <link rel="stylesheet" type="text/css" href="css/shit.css">
</head>
<style>
.sendtoofi{
    width:600px;
    position:absolute;
    margin-top:150px;
    margin-left:250px;

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

  
     <?php

     $dataa=mysql_query("SELECT *FROM emrgncyrpo ORDER BY id ")or die (mysql_error());
    $count = ($dataa? mysql_affected_rows():0);

   

//$dataaa=mysql_query("SELECT *FROM resourc_a")or die (mysql_error());
//$coun = ($dataaa? mysql_affected_rows():0);



   ?>
 <h2><b  style="margin-left:400px;font-size:24px;">Welcome</b></h2>
    <div class="tas">
    <button type="button" class="btn btn-default"><a href="change.php"><i class="fas fa-edit"></i> &nbsp; Change password</a></button>
 <br>
    <button type="button" class="btn btn-default"><a href="viewf.php"><i class="fas fa-eye"></i>&nbsp; View request<?php echo "<b style='color:red'>(".$count.")</b>"; ?></a></button>
    <br>
    <button type="button" class="btn btn-default"><a href="send.php"><i class="fas fa-paper-plane"></i>&nbsp; Send request</a></button>

 <div class="dropdown">
     <button class="btn btn-default dropdown-toggle"style="color:#23527c;" type="button" id="menu1" data-toggle="dropdown"><i class="fas fa-list"></i> &nbsp; Manage File
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="add.php"><i class="fas fa-plus"></i> &nbsp;Add file</a></li>
    
      <li><a href="updatef.php"><i class="fas fa-edit"></i> &nbsp;Update file</a></li>
   
      <li><a href="deletf.php"><i class="fas fa-trash-alt"></i> &nbsp;Delete file</a></li>
  
      <li><a href="viewfill.php"><i class="fas fa-eye"></i> &nbsp;View accident file</a></li>
    </ul>
  </div>
  </div>
  <!--<hr style="width:2px;height:630px;;background-color:grey;position:absolute;margin-left:765px;margin-top:10px;">-->
 
<div style="width:700px;margin-top:400px;margin-left:250px; margin-right:20px; position:absolute;">

<br>
</br>


<?php

   
$result = mysql_query("SELECT * FROM emrgncyrpo ");
 if(mysql_num_rows($result)>0)
{
 while($row=mysql_fetch_array($dataa))
     {
      echo "<tr>";
      
      echo "<td>"; echo"<p style=' font-size: 16px;color:black; text-decoration: underline;'>"; echo $row['name'];echo"</p>";echo "</td>";
       echo"<p style=' font-size: 16px;color:black;'>"; echo $row['report']; echo"</p>";
      ?>
      <td><a href="deleteview.php?slide=<?php echo $row['id'];?>">Cancel</a>

      <?php
      echo "</td>";
      echo "</tr>";
    }
}
 ?>



<!--  To resource allocation  -->
 
</div>




<div class="sendtoofi">
<form method="POST">
<div class ="formgr">
<lable><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Information Exchange</b></lable>
<textarea type="text"name="contentt" style="width:750px;"id ="content" class="form-control"placeholder="Content....."></textarea>
<span id="ad"class="text-danger font-weight-bold"></span>
</div>
<button type="submit" name="submitt"style="margin-left:90px;width:100px;margin-top:3px;"onclick="vali()" class="btn btn-default" value="Submit"><i class="fas fa-paper-plane"></i>Send</button>
<br>
 
        </form>
        <?php


if(isset($_POST['submitt'])){
  
  
    $cont=$_POST['contentt'];


$cont=mysql_real_escape_string($cont);

if(empty($cont))
          { 
  echo" ";
         }
else{
    $sq1=mysql_query("INSERT INTO tmtoofi(cont) VALUES ('$cont')");
 
   
 
 if(!$sq1){
   echo  mysql_error();
 }
 else{

      echo"<p style='color:green;margin-left:140px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data send!"."</p>";
}
 }
}
?>
        </div>


<!--
<div class="viewww" style="width:500px;margin-top:0px;margin-left:600px; margin-right:20px; position:absolute;">

<?php
/*
  echo "<table border=1 style='width:500px;margin-top:0px;margin-left:560px; margin-right:0px; position:absolute;'>";
   echo "<tr>";
 echo "<td colspan='4' align='center'style='color:blue;font-size:20px;'>";echo " There are (";echo"<i style='color:red;'>"; echo $coun; echo "</i>"; echo ")Notification From resource allocation.";echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<th>"; echo "Accident Type"; echo "</th>";
  echo "<th>"; echo "Accident Weight"; echo "</th>";
  echo "<th>"; echo "Resource Type"; echo "</th>";
  echo "<th>"; echo "Action"; echo "</th>";
  
  echo "</tr>";
while($row=mysql_fetch_array($dataaa))
     {
      echo "<tr>";
      echo "<td>"; echo $row['actype']; echo " ";echo "</td>";
      echo "<td>"; echo $row['acweight'];echo "</td>";
      echo "<td>"; echo $row['rstype']; echo "</td>";
      echo "<td>"; echo"<a href='?delete='".$row["actype"]."'>Delete</a>";echo"</td>";
       echo "</tr>";
    
}
?>



<?php

if(isset($_GET['delete'])){
$sql=mysql_query("DELETE FROM aminpost")or die ( mysqli_error());
      

if(!$sql)
{
  echo mysql_error();
}
else
{
echo"<p style='color:red;margin-left:100px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Deleted!"."</p>";
   //  echo"Deleted!";
}

}
*/
?>
</div>
-->
</html>