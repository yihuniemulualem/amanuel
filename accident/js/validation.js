 <script type="text/JavaScript">

function validate()
{

if(document.myform.firstname.value=="")
   { alert("Please enter firstname!" );
    document.myform.firstname.focus() ;
    return false;
   }
   var str=document.myform.password.value;

   if(document.myform.password.value=="")
   { alert("Please enter password!" );
    document.myform.password.focus() ;
    return false;
   }

    }
  </script>
