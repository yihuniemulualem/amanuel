
<?php include"conn.php"; ?>
<!--conection including-->



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


 




 <h2><b  style="margin-left:400px;">Resource Allocation Centre </b></h2>
    

<div class ="formgr">
<lable><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information Exchange</b></lable>
<textarea type="text"name="contentt" id ="content" class="form-control"placeholder="Content....."></textarea>
<span id="ad"class="text-danger font-weight-bold"></span>
</div>
  


<!-- php code for resorce allocate -->
<?php

  
if(isset($_POST['submitt'])){
  
$name=$_POST['act'];
$rport=$_POST['weight'];
$reos=$_POST['reor'];


$name=mysql_real_escape_string($name);
$rport=mysql_real_escape_string($rport);
$reos=mysql_real_escape_string($reos);

if(empty($cont)||
   empty($rport)||
   empty($reso) )
          { 
         echo" ";
         }
$sql =mysql_query("INSERT INTO resourc_a(actype,acweight,rstype) VALUES ('$name','$rport','$reos')");
if(!$sql){
  echo "Some thing is not Ok";
}else{
        echo"<p style='color:red;margin-left:380px;margin-top:470px;position:absolute;overflow:visible;'>"."Your Data Saved!"."</p>";

}


}
?>




</div>
   </div>
       
</html>