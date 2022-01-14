<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KCPS</title>
  <link rel="stylesheet" href="bootstrap_css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap_css/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap_css/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap_css/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap_css/font/css/all.css">
    <link rel="stylesheet" href="bootstrap_css/font/js/all.js">
  
   
<script src="bootstrap_css/js/bootstrap.min.js"></script>
<script src="bootstrap_css/font/js/all.js"></script>

  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/input.css">

</head>
<style>

#notifi{
  margin-top:140px;
  height:30px;
  margin-left:10px;
  position:absolute;
  padding:5px;
}

.main{
  width:50%;
  height:400px;
  position:absolute;
  border-radius:10px;
  left:20%;
  top:50%
  transform:translate(-50%,50%);
   background-image:url('icon/t1.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
   background-size:100% 100%;
box-shadow:1px 2px 10px 10px grey;
animation:slider 9s infinite linear;

}
@keyframes slider{
  0%{background-image:url('icon/t2.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); }
  
  35%{background-image:url('icon/t5.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); }
   
   75%{ background-image:url('icon/t2.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); }
}

#ab{
 
  color:blue;
  line-height: 1.8;
  text-align: center;
 font-size:18px;
  background-color:white;
  text-decoration: none;
width:180px;
}
.left{
  margin-left:0px;

}
#no a:hover{
   background-color:#dddddd;
}
#no a{
  display:block;
  padding:3px 2px 3px 24px;
}
i{
  
  margin-left:300px;
}
a:active{
  color:#dddddd;
  
}

</style>
</head>

<body>


<nav id="home"class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="icon/etho.jpg"  style="width:30px;height:30px;">
       <h1 style="margin-top:0px;"><b><img src="b.png" style="width:500px;height:50px;margin-top:0px;"></b></h1>
      
</b></h1>
    </div>
    
    <div class="top"> 
    
    <ul class="navbar">
      <li ><a href="index.php" data-toggle="tooltip" title="Home"> <i class="fas fa-home"></i>Home</a></li>
      <li ><a href="news.php"data-toggle="tooltip" title="news"><i class="fas fa-newspaper"></i>News </a></li>
       <li><a href="sorport.php"data-toggle="tooltip" title="Report"><i class="fas fa-pen-square"></i>Report</a></li>
      <li><a href="contact.html"data-toggle="tooltip" title="contact us"><i class="fas fa-id-card-alt"></i>Contact us</a></li>
      <li><a href="about.html"data-toggle="tooltip" title="about us"><span class="fas fa-users"></span>About us</a></li>
    
    
    <ul class="navbar-right">
      <li><a href="login.php"data-toggle="tooltip" title="Login"><i class="fas fa-sign-in-alt"></i>
Login</a></li>
    </ul>
    </ul>
   
  </div>
  </nav>

    <span class="alert alert-success" id="notifi">Current Time:

   <?php  date_default_timezone_set('Africa/Addis_Ababa');
     $current_time=date('h:i:s a');
     echo $current_time; ?>
 
  </span>
 <h3 style="margin-top:100px;margin-left:500px;">Welcom to Our site!</h3>
  <div class="image" >
<div class="container">
  <br>

  


<div class="main">

</div>
 <!--
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
     
    </ol>

  
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="icon/t1.jpg" alt="Chania" width="800" height="100"style="border-radius:15px;">
      </div>

      <div class="item">
        <img src="icon/t2.jpg" alt="Chania" width="800" height="100"style="border-radius:15px;">
      </div>
    
      <div class="item">
        <img src="icon/t5.jpg" alt="Flower" width="800" height="100"style="border-radius:15px;">
      </div>

      
    </div>

    <!-- Left and right controls -->
     <!--
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only" >Previous</span>
    </a>
 <a  style="margin-right:510px;"class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    -->
  </div>
</div>
</div>


 <div class="nottt" id="no">
 <table border="1" >
<tr>

 <h3 class="left">
<span class="#"><i class="fas fa-list"></i> Content
</span>
</h3>
   <a href="#bb" id="ab">Mission</a>
 
   <a href="#bbb" id="ab">vission</a>

 
</tr>
</table>
</div>





 <div class="not">
<h4><b style ="color:red">Notes</b></h4>
<table border="1" >
<tr>
      

<p style="padding:5px;">
<p style=' font-size: 16px;'><b>* Take left track.</b> </p> 
<p style=' font-size: 16px;'><b>* please see all direction befor over take the rod</b></p>
<p style=' font-size: 16px;'><b> </b> </p>
</p>
</tr>
</table>
</div>



<h1 style="margin-top:480px;font-size:40px;">Our service</h1>
 <div class="but"id="bb">
<h4><b>Our Mission</b></h4>
<table border="1" >
<tr>
<p style="padding:5px;">
<p style=' font-size: 16px;'><b>1: To transfer useful and modern technology for the society.</b></p> 
<p style=' font-size: 16px;'><b>2: To give suitable and fast service based on society request. </b></p>
<p style=' font-size: 16px;'><b>3: To increase the acceptance of the police stations.</b></p>
<p style=' font-size: 16px;'><b>4: To increase the employee by supporting the technology.</b> </p>


</p>
</tr>
</table>
</div>
<div class="butt"id="bbb">
<h4><b>Our Vission</b></h4>
<table border="1" >
<tr>
<p style="padding:5px;">
<p style=' font-size: 16px;'><b>1:  To be one of the well organized and known service in Ethiopia and other developed countries.</b>    </p> 
<p style=' font-size: 16px;'><b>2:  To increase the quality of service to society.    </b></p>
<p style=' font-size: 16px;'><b>3:  Satisfying the society.     </b></p>


</p>
</tr>
</table>
</div>

<div class="foter">
<hr style="width:1345px;height:1px;background-color:#fff;">
<p style="margin-left:300px;"> Copyright &copy; <?php echo date("Y"); ?> <font color ="black" size="3">All rights reserved. Design by CS 4rd year student</a>.

<i><a href="https://www.facebook.com/"data-toggle="tooltip" title="Facebook"><img src="icon/fb.png"  style="width:40px;height:40px;"></a>
<a href="https://www.instagram.com/"data-toggle="tooltip" title="instagram"><img src="icon/insta.png"  style="width:40px;height:40px;"></a>
<a href="https://www.youtube.com/"data-toggle="tooltip" title="youtube"><img src="icon/you.png"  style="width:40px;height:40px;">
<a href="https://twitter.com/"data-toggle="tooltip" title="twiter"><img src="icon/twtr.png"  style="width:40px;height:40px;"></a></i></p>
<p id="sosial">

</p>
</div>
</div>






</body>

</html>