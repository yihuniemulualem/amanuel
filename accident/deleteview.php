<!--<?php


  //$sql=mysql_query("DELETE FROM emrgncyrpo WHERE id='$id'")or die ( mysqli_error());
   //$sql=mysql_query("DELETE FROM aminpost WHERE id='$id'")or die ( mysqli_error());
      


//header("Location: viewf.php"); 

?>
-->
<?php

  include"conn.php";
 $ss=$_GET['slide'];
	 $sql=mysql_query("DELETE FROM emrgncyrpo where id='".$ss."'");
    if($sql){
echo"<p style='color:red;margin-left:250px;width:200px;margin-top:auto;position:absolute;overflow:visible;'>"."Your Data Deleted!"."</p>";
    	 }
 else{ 
echo"<p style='color:red;margin-left:250px;width:200px;margin-top:auto;position:absolute;overflow:visible;'>"."Your Data Not Deleted!"."</p>";

 }
 header("refresh:1 url=viewf.php");
?>

	   