

<?php include"conn.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap_css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/input.css">
 <link rel="stylesheet" type="text/css" href="css/shit.css">
</head>
<body>


<a href=""styel="color:red;">back</a>
    <?php

     
        if(isset($_POST['genert'])){

         $_SESSION=$actype;
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
      echo "<br>";  echo "<b style='margin-left:130px;'>";echo"<i style='text-decoration: underline;'>";echo "Accident Type:-";echo"</i>";
      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      echo $row["actype"];echo"</b>";

       echo"<br>";

       echo "<br>";  echo "<b style='margin-left:130px;'>";echo"<i style='text-decoration: underline;'>";echo "Accident Weight:-";echo"</i>";
        
        echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo $row["acweight"];echo"</b>";
       echo"<br>";
      //echo "<br>"; echo $row["acweight"];
       echo "<br>";  echo "<b style='margin-left:130px;'>";echo"<i style='text-decoration: underline;'>";echo "Resource:-";echo"</i>";
     
      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo $row["rstype"];echo"</b>";
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
</body>
</html>