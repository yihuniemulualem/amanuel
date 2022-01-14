<?php

 include"conn.php"; 
$id=$_POST['id'];
  $sql=mysql_query("DELETE FROM emrgncyrpo WHERE id='$id'")or die ( mysqli_error());
   $sql=mysql_query("DELETE FROM aminpost WHERE id='$id'")or die ( mysqli_error());
      $sql=mysql_query("DELETE FROM resourc_a")or die ( mysqli_error());


header("Location: send.php"); 

?>