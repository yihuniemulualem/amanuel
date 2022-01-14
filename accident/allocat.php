

<?php
session_start();
if(isset($_SESSION['admin']))
{
  echo"<p class='alert alert-success' style='color:red;margin-left:1190px;margin-right:10px;margin-top:80px;position:absolute;overflow:visible'>"."<b style='color:blue;'>Welcome\t:</b>  ".$_SESSION['u_namee']."</p>";
  

}else{
header("refresh:1 url=login.php");

}

?>


<?php include"conn.php"; ?>
<!--conection including-->



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

table{
 border-radius:10px;
}
  .send{
  	position:absolute;
  	margin-top:150px;
  	margin-left:250px;

  }
  .sendd{
  	position:absolute;
  	margin-top:150px;
  	margin-left:750px;
  }
   #tabl{
    width:200px;
    border-radius:15px;
  
    margin-left:10px;
    margin-top:10px;
  
    position:relative;
    
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
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i> News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>  Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>  About us</a></li>
        <ul class="navbar-right">
      <li><a href="logout.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i>Logout</a></li>
    </ul>
    </ul>
    </div>
    </div>
    </div>
    </nav>
 




 <h2><b  style="margin-left:400px;">Resource Allocation Center</b></h2>
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
  

</div>



<script type="text/javascript">
function vali(){
   var b=document.getElementById('b').value;
  if(b==""){
         document.getElementById('bg').innerHTML="Please Fill Your Resource!";
         return false;
       }
       
     }
</script>






 <hr style="width:2px;height:500px;background-color:grey;position:absolute;margin-left:650px;margin-top:140px;">
<div class="send">
<form method="POST" action="#">
  
  <fieldset>
  <legend>To Add resource...</legend>
        <b>Type of Resource:<a style="color:red;">*</a></b>
        <input type="text"id ="fnamee"name="act"class="form-control"placeholder="EX.car,human , finatial "title="">
         <b>Amount Resource:<a style="color:red;">*</a></b>
<input style="width:95px;"type="number"placeholder="How mach"name="weight" id="pdie"class="form-control">

        <br>
      
            
                             <button  name="submitt"style="margin-left:80px;width:100px;margin-top:0px;" onclick="vali()" class="btn btn-default" value="Submit"><i class="fas fa-paper-plane"></i>Save</button>
                             <span id="bg"class="text-danger font-weight-bold"></span>

                           </fieldset>    
     
     </form>
     <?php

  
if(isset($_POST['submitt'])){
  
$name=$_POST['act'];
$rport=$_POST['weight'];



$name=mysql_real_escape_string($name);
$rport=mysql_real_escape_string($rport);


if(empty($cont)||
   empty($rport) )
          { 
         echo" ";
         }
$sql =mysql_query("INSERT INTO resourc_a(actype,acweight) VALUES ('$name','$rport')");
if($sql){
  echo"<p style='color:red;margin-left:110px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data Saved!"."</p>";
  
 
}else{
       echo"<p style='color:red;margin-left:110px;margin-top:10px;position:absolute;overflow:visible;'>"."Your Data not Saved!"."</p>";  

}


}
?>

        </div>

<!-- php code for resorce allocate -->



<div class="sendd">
<form method="POST" action="#">
  <fieldset>
  <legend>Check Avilability resource...</legend>
   <b>Type of Resource:<a style="color:red;">*</a></b>
        <input type="text"id ="fnamee"name="usertt"class="form-control"placeholder="EX.car,human , finatial "title="">
        
<br>
<br>
                       <button type="submit" name="send"style="margin-left:70px;width:100px;margin-top:3px;"onclick="vali()" class="btn btn-default" value="Submit">Check</button>
                       <button type="submit" name="genert"style="margin-left:70px;width:100px;margin-top:3px;" oncilck="window.print()"class="btn btn-default" ><a href="aaaa.php">Generat</a></button>
                    
   </fieldset>
 
        </form>
     

        <?php

        if(isset($_POST['send'])){

          $actype=$_POST['usertt'];
          $_SESSION=$actype;
         // $acweight=$_POST['acweigh'];
       // $resource=$_POST[''];

       $query="SELECT * FROM resourc_a WHERE actype='$actype'";

   $res = mysql_query($query);
        //  $query= mysql_query("SELECT * FROM resourc_a WHERE actype='$actype'AND acweight='$acweight'");
          echo "<table  border ='1'style='color:red;position:absolute;margin-top:30px;aligin:center;width:400px;align=center;'  >";
          echo "<tr>";
          echo "<th>Resource Type</th>";
          echo "<th>Amaount</th>";
          echo "</tr>";
          
while($row = mysql_fetch_array($res))
  {

      echo "<tr style='color:blue;'>";
      echo "<td>"; echo $row["actype"];echo"</td>";
      echo "<td>"; echo $row["acweight"];echo "</td>";
      echo "</tr>";
  }
          echo "</table>";
  }
?> 



<!-- To Generate and print resource -->
<div class="print" id="div-id-name">
     <?php

     
        if(isset($_POST['genert'])){

         $actype=$_POST['usertt'];

       $quer="SELECT * FROM resourc_a WHERE actype='$actype'";

   $res = mysql_query($quer);
       
          echo "<table  border ='1'style='border-radius:10px;color:red;position:absolute;margin-top:30px;aligin:center;width:500px;align=center;'  >";
          
          
while($row = mysql_fetch_array($res))
  {

      echo "<tr style='color:blue;border-radius:10px;'>";
      echo "<td>";
      echo"<br>";
      echo"<b style='margin-left:400px;text-decoration: underline;'>";echo date("Y/m/d");echo"</b>";
      echo"<br>";
       echo"<b style='margin-left:100px;text-decoration: underline;'>"; echo "Resource Allocation Report";echo"</b>";
        echo"<br>";
      echo "<br>";  echo "<b style='margin-left:130px;'>";echo"<i style='text-decoration: underline;'>";echo "Resource Type:-";echo"</i>";
      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      echo $row["actype"];echo"</b>";

       echo"<br>";

       echo "<br>";  echo "<b style='margin-left:130px;'>";echo"<i style='text-decoration: underline;'>";echo "Amaount:-";echo"</i>";
        
        echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo $row["acweight"];echo"</b>";
       echo"<br>";
      //echo "<br>"; echo $row["acweight"];
      
     
      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
       
    // echo "<br>"; echo $row["rstype"];
    echo"<br>";
    echo"<br>";
    echo"<br>";
     echo" <a href='#'id='print'onclick='javascript:printlayer('div-id-name')' >Print</a>";
     echo "</td>";
    
      echo "</tr>";
  }
          echo "</table>";
  }
?> 
</div>
   </div>
       
</html>