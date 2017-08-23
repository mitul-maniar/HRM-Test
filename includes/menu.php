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
       <a class="navbar-brand" href="index.php">JAZBA 2017</a>
     </div>   
     <!-- Collect the nav links, forms, and other content for toggling -->
     <?php if(isset($_SESSION['userid'])){
		 ?>
	 <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav"> </ul> 
       <ul class="nav navbar-nav navbar-right">
         <li><a href="includes/logout.php"> LOGOUT </a></li>
       </ul> 
     </div>
	 <?php }?>      
    </div>
  </nav> 