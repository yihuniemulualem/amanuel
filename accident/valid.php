<?php

if(isset($_POST['save'])){

if($_POST['firstname']==""){
  $error_msg['namee']="First name is empty";
}
$namee=$_POST['firstname'];
if(!preg_match("/^[a-zA-Z-]*$/",$namee)){
  $error_msg['namee']="Only letter allowed";
}

if($_POST['lasttname']==""){
  $error_msg['lname']="Last name is empty";
}
$lname=$_POST['lasttname'];
if(!preg_match("/^[a-zA-Z-]*$/",$lname)){
  $error_msg['lname']="Only letter allowed";
}
$num=$_POST['phone'];

if(empty($num)){
    $error_msg['phone']="Phone number is empty";
}

if(is_numeric($num)){
    $error_msg['phone']="Only number";
}
if((strlen($num)!=10)){
     $error_msg['phone']="Phone number is 10 degit";
}
$emal=$_POST['email'];
if(empty($emal)){
   $error_msg['email']="Fill email id";
}

if (!filter_var($emal, FILTER_VALIDATE_EMAIL)) {
  $error_msg['email']="Email id is invalid";
}
if($_POST['User']==""){
  $error_msg['User']="User name is empty";
}
if($_POST['password']==""){
  $error_msg['password']="password is empty";
}
}
?>





    if($_POST['firstname']==""){
  $error_msg['namee']="First name is empty";
}

$namee=$_POST['firstname'];
if(!preg_match("/^[a-zA-Z-]*$/",$namee)){
  $error_msg['namee']="Only letter allowed";
}

if($_POST['lasttname']==""){
  $error_msg['lname']="Last name is empty";
}

$lname=$_POST['lasttname'];
if(!preg_match("/^[a-zA-Z-]*$/",$lname)){
  $error_msg['lname']="Only letter allowed";
}

$num=$_POST['phone'];

if(empty($num)){
    $error_msg['phone']="Phone number is empty";
}

if(!is_numeric($num)){
    $error_msg['phone']="Only number";
}

if((strlen($num)!=10)){
     $error_msg['phone']="Phone number is 10 degit";
}

$emal=$_POST['email'];
if(empty($emal)){
   $error_msg['email']="Fill email id";
}

if (!filter_var($emal, FILTER_VALIDATE_EMAIL)) {
  $error_msg['email']="Email id is invalid";
}

if($_POST['User']==""){
  $error_msg['User']="User name is empty";
}
if($_POST['password']==""){
  $error_msg['password']="password is empty";
}
    

    if($_POST['firstname']==""){
  $error_msg['namee']="First name is empty";
}

$namee=$_POST['firstname'];
if(!preg_match("/^[a-zA-Z-]*$/",$namee)){
  $error_msg['namee']="Only letter allowed";
}

if($_POST['lasttname']==""){
  $error_msg['lname']="Last name is empty";
}

$lname=$_POST['lasttname'];
if(!preg_match("/^[a-zA-Z-]*$/",$lname)){
  $error_msg['lname']="Only letter allowed";
}

$num=$_POST['phone'];

if(empty($num)){
    $error_msg['phone']="Phone number is empty";
}

if(!is_numeric($num)){
    $error_msg['phone']="Only number";
}

if((strlen($num)!=10)){
     $error_msg['phone']="Phone number is 10 degit";
}

$emal=$_POST['email'];
if(empty($emal)){
   $error_msg['email']="Fill email id";
}

if (!filter_var($emal, FILTER_VALIDATE_EMAIL)) {
  $error_msg['email']="Email id is invalid";
}

if($_POST['User']==""){
  $error_msg['User']="User name is empty";
}
if($_POST['password']==""){
  $error_msg['password']="password is empty";
}
    


//

<script type="text/JavaScript">

    function validate()
        {
   if(document.myform.file.value=="")
   { alert("Please enter file_id!" );
    document.myform.file.focus() ;
    return false;
   }
   
if(document.myform.fname.value=="")
   { alert("Please enter firstname!" );
    document.myform.fname.focus() ;
    return false;
   }
  
    var src=document.myform.age.value;
     if(document.myform.age.value==""){
     alert("please enter age");
     document.myform.age.focus();
      return false;
  }else if(src.length<2){
     alert("your age is invalid");
     document.myform.age.focus();
      return false;
  }else if(src.length>2){
     alert("your age is invalid");
     document.myform.age.focus();
      return false;
  }
     

     var str=document.myform.phone.value;
   if(document.myform.phone.value=="")
   { alert("Please enter your phnone number!" );
    document.myform.phone.focus() ;
    return false;
   }else if (str.length<10){
     alert("your  enterd phone number minimum!" );
    document.myform.phone.focus() ;
    return false;
   }
   else if(str.length>10){
     alert("your enterd phone number max!" );
    document.myform.phone.focus() ;
    return false;
   }
   if(document.myform.address.value=="")
   { alert("Please enter address!" );
    document.myform.address.focus() ;
    return false;
   }
   
     if(document.myform.pdate.value=="")
  {
  alert("please enter dai number");
  document.myform.pdate.value="";
  document.myform.pdate.focus();
  return false;
  }
  
  if(document.myform.dinfo.value=="")
   { alert("Please enter detail information for accednt !" );
    document.myform.dinfo.focus() ;
    return false;
   }
  
 
    }

  </script>