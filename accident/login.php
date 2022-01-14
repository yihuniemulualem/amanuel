<?php
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
  <title>KCPS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap_css/bootstrap.min.css">
  
    <link rel="stylesheet" type="text/css" href="input.css">
      <link rel="stylesheet" type="text/css" href="css/log.css">
</head>


<style>
button{

  text-color: blue;
}
span{
  margin-left:25px;

}

#po,em,ch{
  color:red;
  overflow:visible;
}



</style>

<body>




<!-- VALIDATION FOR EMAIL-->

<script type="text/JavaScript">

     function valii(){
 var uname=document.getElementById('uname').value;
 var email=document.getElementById('emaill').value;

 if(uname==""){
         document.getElementById('af').innerHTML="Please fill user name!";
         return false; 
       }
 if(email==""){
         document.getElementById('ad').innerHTML="Please fill email id!";
         return false;
         
 }
if(email.indexOf('@')<=0){
         document.getElementById('ed').innerHTML="Fill proper email format @";
         return false;
 }
 if(email.indexOf('.')>3){
         document.getElementById('ed').innerHTML="Fill proper email format .";
         return false;
}
}
 </script>
 



 <!--PHP FOR LOGIN-->

<?php
include"conn.php";


if(isset($_POST['login'])){

   $user=$_POST['firstname'];
   $psw=$_POST['password'];
   //$usertyp=$_POST['typee'];

   $user=mysql_real_escape_string($user);
    $psw=mysql_real_escape_string($psw);
     //$usertyp=mysql_real_escape_string($usertyp);

    if(empty($user) ||
       empty($psw))
      // empty($usertyp))
    {

       echo"";
   }


   $query="SELECT * FROM useracount WHERE u_namee='$user'AND
   psww='$psw' ";

   $res = mysql_query($query);

     $row=mysql_fetch_array($res);
     if($res){
      
       if($row['u_namee']==$user && $row['psww']==$psw && $row['usertypee']=='admin'){
        $_SESSION['u_namee']=$user;
          $_SESSION['admin']=$user;
          session_write_close();
          header("Location:post.php");
          exit();
       } 
       elseif($row['u_namee']==$user && $row['psww']==$psw && $row['usertypee']=='Officer'){
                $_SESSION['u_namee']=$user;
          $_SESSION['Officer']=$user;
           session_write_close();
           header("Location:emergnrpo.php");
           exit();
       }
        elseif($row['u_namee']==$user && $row['psww']==$psw && $row['usertypee']=='Teamcontroler'){
                  $_SESSION['u_namee']=$user;
            $_SESSION['Teamcontroler']=$user;
             session_write_close();
             header("Location:change.php");
             exit();
       }
     
 
     else{

              echo"<p style='color:red;margin-left:600px;margin-top:190px;position:absolute;'>"."Incorect User name and password!"."</p>";
  
   }

 }

  
       
        }
            ?>

<!--VALIDATION FOR LOGINFORM-->


  <script type="text/JavaScript">

     function validation(){


      var usern=document.getElementById('fname').value;
      var psw=document.getElementById('psw').value;
    

    if(usern==""){
         document.getElementById('ab').innerHTML="Please fill user name!";
         return false; 
       }

     if(psw==""){
       document.getElementById('ac').innerHTML="Please fill password!";
         return false; 
     }

    if(psw.length<4){
       document.getElementById('ac').innerHTML="Your password is minimum!";
         return false
    }
    if(psw.length>8){
       document.getElementById('ac').innerHTML="Your password is maximum!";
         return false
    }
    
 }
 
 </script>

 
<div>
  <form name="myform" method="POST" >


      <b>UserName<a style="color:red;">*</a></b>
      <input type="text"style=" margin-left:8px;"class="form-control" id="fnamee" name="firstname"placeholder="UserName"title="plz fill">
      <span id="ab" class="text-danger font-weight-bold"></span>
<br>
    <b>Password<a style="color:red;">*</a> </b>
    <input style="margin-left:8px;" class="form-control"type="password" id="psw" name="password" placeholder="* * * * * * * *"title="">
       <span id="ac" class="text-danger font-weight-bold"></span>
 <br>

 <!--  <b style="margin-top:15px;">Type<a style="color:red;">*</a></b>
    <select type="option"style="margin-left:40px; height:39px;font-size: 12px;"id="country" name="typee">
      <option value="Admin">Admin</option>
      <option value="Officer">Officer</option>
      <option value="Teamcontroler">Teamcontroler</option>
    </select>
  -->
  <button type="submit" name="login" onclick="validation()" class="btn btn-default" value="Submit"><img src="icon/login.png"  style="width:25px;height:25px;"><a href="#">Login</a></button>
    
  </form>
</div>
 <div class="modal-footer">
       
          <p>Forgot<a href="#for"title="For got Password">Password?</a></p>
        </div>
</body>

<div class="for"id ="for" >
<a href="" class="close">X</a>
<form name="mform"method="POST">
<input type="text" class="form-control" name="name"placeholder="Usre name"id="uname"style="width:270px;margin-top:5px;">
<span id="af" class="text-danger font-weight-bold"></span>
 <input type="email" class="form-control" name="email"placeholder="Email"id="emaill"style="width:270px;position:absolute;">
 <span id="ad" class="text-danger font-weight-bold"></span>
 <br>
<button type="submit" name="mail" onclick="valii()"class="btn btn-default"style="width:80px;margin-left:280px;"><img src="icon/ss.png"  style="width:25px;height:25px;"><a href="#">Send</a></button>
<br>
 
</form>


<?php

if(isset($_POST['mail'])){

  $email=$_POST['email'];
  $name=$_POST['name'];
   
   $mailto = "tesena7@gmail.com";
   $heder = "From :".$email;
   $txt = "You have receved an email from".$name;
   mail($mailto,$txt, $heder);
   header("Location:#for?mailsend");

    
   
}
 


?>
</div>
</html>
