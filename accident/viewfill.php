
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
 <link rel="stylesheet" type="text/css" href="css/shit.css">
</head>
<style>


span{

  margin-left:660px;
  position:fixed;
  margin-top:5px;
}

table {
  position:absolute;
  margin-top:8px;
  margin-right:5px;
}
  th{
    text-align:center;
    width:200px;
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
      <li ><a href="index.php" data-toggle="tooltip" title="Home!"><i class="fas fa-home"></i> Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i> News </a></li>

      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>  About us</a></li>
        <ul class="navbar-right">
      <li><a href="logout.php"data-toggle="tooltip" title="Logout"><i class="fas fa-sign-in-alt"></i>Logout</a></li>
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
      <li><a href="add.php"><i class="fas fa-plus"></i> &nbsp;Add file</a></li>
    
      <li><a href="updatef.php"><i class="fas fa-edit"></i> &nbsp;Update file</a></li>
   
      <li><a href="deletf.php"><i class="fas fa-trash-alt"></i> &nbsp;Delete file</a></li>
  
      <li><a href="viewfill.php"><i class="fas fa-eye"></i> &nbsp;View accident file</a></li>
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
  <h2 style="margin-left:400px;font-size:24px;"><b>View Records using file id</b></h2>


<div class="viee">
<form name="myform"method="POST">

<div class ="formgr">
<input style="width:150px;position:absolute;margin-left:800px;"name="fileid" id ="fil"type="text"class="form-control"placeholder="Search">

<span id="ab"class="text-danger font-weight-bold"></span>
</div>
<button type="submit" onclick="vali()"style="margin-left:1000px;"class="btn btn-default" name="search"value="Submit"><i class="fas fa-search"></i>Search</button>

</form>
<br>

</thead>
<tbody>
<div class ="formgr">
<?php
include"conn.php";

if(isset($_POST['search']) )
{
  $serch =$_POST['fileid'];

  $res=mysql_query("SELECT * FROM tview WHERE fill_id='$serch'");


  echo "<table border=1>";
  echo "<tr>";
  echo "<th>"; echo "File ID"; echo "</th>";
 echo "<th>"; echo "Full Name"; echo "</th>";
 echo "<th>"; echo "Sex"; echo "</th>";
 echo "<th>"; echo "Age"; echo "</th>";
 echo "<th>"; echo "Date of birth"; echo "</th>";
 echo "<th>"; echo "Phone"; echo "</th>";
 echo "<th>"; echo "Type of Accednt"; echo "</th>";
 echo "<th>"; echo "Address"; echo "</th>";
 echo "<th>"; echo "Date"; echo "</th>";
 echo "<th>"; echo "Time"; echo "</th>";
 echo "<th>"; echo "People Die"; echo "</th>";
 echo "<th>"; echo "Details of incident"; echo "</th>";
 echo "</tr>";



while($row=mysql_fetch_array($res))
{
	echo "<tr>";
  echo "<td>"; echo $row["fill_id"]; echo "</td>";
 echo "<td>"; echo $row["name"]; echo "</td>";
 echo "<td>"; echo $row["sex"]; echo "</td>";
 echo "<td>"; echo $row["age"]; echo "</td>";
 echo "<td>"; echo $row["date_b"]; echo "</td>";
 echo "<td>"; echo $row["phone"]; echo "</td>";
 echo "<td>"; echo $row["accidnt_t"]; echo "</td>";
 echo "<td>"; echo $row["adres"]; echo "</td>";
 echo "<td>"; echo $row["datee"]; echo "</td>";
 echo "<td>"; echo $row["time"]; echo "</td>";
 echo "<td>"; echo $row["pdie"]; echo "</td>";
 echo "<td style='width:auto;'>"; echo $row["content"]; echo "</td>";
 echo "</tr>";
}
echo "</table>";
}

?>
</div>
</div>
</body>
   </html>