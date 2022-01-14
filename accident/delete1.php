<?php

  include"conn.php";
 $ss=$_GET['slide'];
	 $sql=mysql_query("DELETE FROM tmpost where id='".$ss."'");
    if($sql){
echo"<p style='color:red;margin-left:250px;width:200px;margin-top:auto;position:absolute;overflow:visible;'>"."Your Data Deleted!"."</p>";
    	 }
 else{ 
echo"<p style='color:red;margin-left:250px;width:200px;margin-top:auto;position:absolute;overflow:visible;'>"."Your Data Not Deleted!"."</p>";

 }
 header("refresh:1 url=send.php");
?>
