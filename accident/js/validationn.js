 function validate()
{

if(document.myform.firstname.value=="")
   { alert("Please enter firstname!" );
    document.myform.firstname.focus() ;
    return false;
   }
   if(document.myform.lasttname.value=="")
   { alert("Please enter lasttname!" );
    document.myform.lasttname.focus() ;
    return false;
   }
    var str=document.myform.phone.value;
   if(document.myform.phone.value=="")
   { alert("Please enter your phnone number!" );
    document.myform.phone.focus() ;
    return false;
   }else if (str.length<10){
     alert("your enterd data minimum!" );
    document.myform.phone.focus() ;
    return false;
   }
   else if(str.length>10){
     alert("your enterd data max!" );
    document.myform.phone.focus() ;
    return false;
   }

   if(document.myform.email.value=="")
   { alert("Please enter Email!" );
    document.myform.email.focus() ;
    return false;
   }

   if(document.myform.User.value=="")
   { alert("Please enter user name!" );
    document.myform.User.focus() ;
    return false;
   }
   var str=document.myform.password.value;

   if(document.myform.password.value=="")
   { alert("Please enter password!" );
    document.myform.password.focus() ;
    return false;
   }else if (str.length<4){
     alert("Tel phone number are 10 diget!" );
    document.myform.password.focus() ;
    return false;
   }
   else if(str.length>8){
     alert("your enterd data max!" );
    document.myform.password.focus() ;
    return false;
   }
   if(document.myform.namee.value=="")
   { alert("Please enter your name!" );
    document.myform.namee.focus() ;
    return false;
   }
     if(document.myform.contentt.value=="")
   { alert("Please enter your report" );
    document.myform.contentt.focus() ;
    return false;
   }
 
 
    }
