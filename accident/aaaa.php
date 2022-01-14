
<?php include"conn.php"; ?>
<!--conection including-->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
 

    <link rel="stylesheet" type="text/css" href="css/input.css">
 <link rel="stylesheet" type="text/css" href="css/shit.css">
</head>
<style>


  .send{
    width:800px;
    height:700px;
  	position:absolute;
  	margin-top:50px;
  	margin-left:250px;
    margin-bottom:50px;
  }
  .me{
    position:absolute;
    margin-left:770px;
   margin-top:50px;
  }
</style>
</head>

<body>





    

<div class="send">
<textarea style="position:absolute;width:500px;height:400px;margin-top:2px;"type="text"name="contentt" id ="content" class="form-control"placeholder="">                                                     
                                                    <?php echo date("Y/m/d");?>





                        Resource Allocation Report  



      Resource Type:- 

             Amaount:-                                                                   


</textarea>
  </div>
  <div class="me">
<a href='#'id='print' onclick="window.print()">Print</a>

<!-- php code for resorce allocate -->


</div>
   </div>
       
</html>