
<php

if(isset($_POST['email'])==true && empty($_POST['email'])==false){
  $emaill=$_POST['email'];
 if(preg_mach("/([w-]+@[w-]+.[w-]+)/",$emaill)){
  echo 'vlid email';
}
else{  
echo 'Invalid email format';
}
}
 <script type="text/javascript">
function vali(){
  var fname=document.getElementById('fname').value;
   var lname=document.getElementById('lname').value;
    var phone=document.getElementById('phone').value;
     var email=document.getElementById('email').value;
      var user=document.getElementById('user').value;
       var psw=document.getElementById('psw').value;
       if(fname==""){
         document.getElementById('na').innerHTML="First name is empty";
         return false;
       }
          if((fname.length<4)|| (fname.length>15)){
            document.getElementById('na').innerHTML="PLZ fill between 4-15";
         return false;
       }
       if(!isNaN(fname)){
           document.getElementById('na').innerHTML="Only characher allowed ";
         return false;
       }
          if(lname==""){
         document.getElementById('ln').innerHTML="Last name is empty";
         return false;
       }
       if((lname.length<4)|| (lname.length>15)){
            document.getElementById('ln').innerHTML="PLZ fill between 4-15";
         return false;
       }
       if(!isNaN(lname)){
           document.getElementById('ln').innerHTML="Only characher allowed ";
         return false;
       }
    
             if(phone==""){
         document.getElementById('ph').innerHTML="Phone number is empty";
         return false;
       }
       if(phone.length!=10){
         document.getElementById('ph').innerHTML="Phone number is 10 degit";
         return false;
       }
       if(isNaN(phone)){
         document.getElementById('ph').innerHTML="Phone number should contins degit";
         return false;
       }
          if(email==""){
         document.getElementById('em').innerHTML="Email is empty";
         return false;
       }
       if(email.indexOf('@')<=0){
         document.getElementById('em').innerHTML="PLZ fill proper email format @";
         return false;
       }
       if(email.charAt(email.length-4)!='.')&& (email.charAt(email.length-4!='.')){
         document.getElementById('em').innerHTML="PLZ fill proper email format .";
         return false;
       }
          if(usre==""){
         document.getElementById('us').innerHTML="user name is empty";
         return false;
       }
   
          if(psw==""){
         document.getElementById('psw').innerHTML="passowrd is empty";
         return false;
       }
}
</script>
?>




<?php
if(isset($_POST['save'])){


 
  $fn=$_POST['firstname'];
$ln=$_POST['lasttname'];
$sex=$_POST['sexx'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$User=$_POST['User'];
$psw=$_POST['password'];
   


mysql_query("INSERT INTO adnu (fname,lname,sex,phone,email,u_name,psw) 
 VALUES ('$fn','$ln','$sex','$phone','$email','$User','$psw')")or die(mysql_error());  

}    

         

?>



<?php
include"conn.php";

if(isset($_POST['savee']) )
{


$fil=$_POST['file'];
$fn=$_POST['fname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$datb=$_POST['datt'];
$phone=$_POST['phone'];
$actype=$_POST['actype'];
$adrs=$_POST['address'];
$datee=$_POST['datee'];
$time=$_POST['timee'];
$pdie=$_POST['pdie'];
$con=$_POST['dinfo'];



$fil=mysql_real_escape_string($fil);
$fn=mysql_real_escape_string($fn);
$sex=mysql_real_escape_string($sex);
$age=mysql_real_escape_string($age);
$datb=mysql_real_escape_string($datb);
$phone=mysql_real_escape_string($phone);
$actype=mysql_real_escape_string($actype);
$adrs=mysql_real_escape_string($adrs);
$datee=mysql_real_escape_string($datee);
$time=mysql_real_escape_string($time);
$pdie=mysql_real_escape_string($pdie);
$con=mysql_real_escape_string($con);




if(empty($fil) || 
   empty($fn) ||
   empty($sex) ||
   empty($age) ||
   empty($datb) ||
   empty($phone) ||
   empty($actype) || 
   empty($adrs) ||
   empty($date) ||
   empty($time) ||
   empty($pdie) ||
   empty($con))
  
   {
     $error_msg=" ";
   }
   else
   {
   $qurey = mysql_query("INSERT INTO tview (fill_id,name,sex,age,date_b,phone,accidnt_t,adres,datee,time,pdie,content) 
 VALUES ('$fil','$fn','$sex','$age','$datb','$phone','$actype','$adrs','$date','$time','$pdie','$con')"); 

      if(!$qurey) {
          echo mysql_error();

     
 
      }
      else
      {
          $error_msg="Saved!";
        
     
      }
      
}
}
?>
