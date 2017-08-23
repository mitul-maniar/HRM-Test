<!DOCTYPE html>
<html>
<head> 
  <title> Jazba 2016 | View Events</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <style type="text/css">
  

.container .btn-group .active { background-color : blue }
  </style>
    <nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->      
     <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="index.php">Jazba 16</a>
     </div>   
     <!-- Collect the nav links, forms, and other content for toggling -->
     	 <div class="collapse navbar-collapse" id="myNavbar">
           
       <ul class="nav navbar-nav"> </ul> 
       <ul class="nav navbar-nav navbar-right">
         <li><a href="edit.php"> EDIT BASIC DETAILS</a></li>
         <li><a href="includes/logout.php"> LOGOUT </a></li>
       </ul> 
     </div>
	       
    </div>
  </nav> 	
</head>
<body>
  
  <div class="container">
    <h2 align="center">View Events</h2>
    <br/><br/>
  <div class="table-responsive">
  <form>
	<table class="table table-condensed table-striped table-hover ">
  <thead>
    <tr>
      <th>Jaz_ID</th>
      <th>Name</th>
      <th>Enrolment</th>
      <th>Amount</th>
      <th> </th>
    </tr>
  </thead>
  <tbody>
<?php
$i=1;
  while ($i <= 10) {
    
?>
  	<tr>
  		<td>Jaz_<?php echo $i; ?></td>
  		<td>TEST USER</td>
  		<td>000000000000</td>
  		<td>500</td>
  		<td class="btn-group" data-toggle="buttons"><label class="btn btn-default"> <input type="checkbox" autocomplete="off">Select</label></td>
  	</tr>
    <?php $i++; } ?>
  </tbody>
</table> 
<center>
  <button type="submit" class="btn btn-primary">Submit</button>
</center>
</form>
</div>

</div>
<br/>
<br/>
<br/>
<!--<div class="navbar navbar-default navbar-fixed-bottom">
<center>
<footer style="max-width:1500px" >
<div class="container-fluid">
  
  <div class="pull-left">
  <ul class="nav navbar-nav1">
  <li><a href="eventdetails.php" target="_blank">EVENTS</a></li>
  <ul>
  </div>
  
  GIT, &copy;2016, <a href="../team/">Web Dev Team</a>
  
  
  <div class="pull-right">
    <ul class="list-inline">
      <li><a href="include/TX16_Help.pdf" target="_blank">Help Manual <img style="max-width:30px" src="include/qm.png"/></a></li>
    </ul>
  </div>
</div>
</footer>
</center>

</div>-->
<!--
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav1">
        <li ><a href="#">Dashboard</a></li><ul>
        </ul class="nav navbar-nav1">
		<ul><li class="active"><a href="#">Stories</a></li></ul>
        <ul class="nav navbar-nav1 navbar-right pull-right"><li a href="#">Social Links</a></li>
      </ul>
    </div>
  </div>
</nav>-->
<style>
  .navbar-nav1 {
    width: 99%;
    text-align: center;
	align="right"
  }
  .navbar-nav1 > li {
    float: none;
    display: inline-block;
  }
  .navbar-nav1 > li.navbar-right {
    float: right !important;
  }
}

</style>
<nav class="navbar navbar-default navbar-bottom" role="navigation" align="center" style="background:#000">

  <div class="navbar-collapse">
    <ul class="nav navbar-nav navbar-nav1">
      <li class="navbar-left" style="color:#fff;line-height: 3.428571;">GIT, &copy; 2016</li>
      <!--li><a href="#"> <font color="blue">Web Dev Team</font></a></li-->
      <li class="navbar-right"><a href="team/" target="_blank"> <font color="#337ab7">Web Dev Team</font></a></li>
	  <!--li class="navbar-right"><a href="#">Help Manual <img style="max-width:30px" src="includes/qm.png"/></a></li-->
    </ul>
  </div>
</nav> 
</body>
</html>