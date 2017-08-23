<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="js/jquery.min.js"></script>
	<script src="js/parsley.min.js"></script>
	<?php require("includes/menu.php")?>
	<script type="text/javascript">
    $('#form').parsley();
    </script>
    <title>Profile Creation Form</title>
<?php require("includes/page_includes.php");?>
<?php require("includes/Connection.php");?>
</head>
<form class="form-vertical" form="myform" action="register.php" method="POST" data-parsley-validate>
<fieldset>
    <div class="form-group">
	
      <label for="inputEmail" class="col-lg-3 control-label">Short Name</label>
      <optgroup>
	  <option name="" value="default"></option>
	  </optgroup>
	  <label for="inputEmail" class="col-lg-3 control-label">Short Name</label>
      <div class="col-lg-9">
        <input class="form-control" id="short_name" name="short name" placeholder="Short Name" type="text" required="required">
      </div>
	  <br><br>
	  <label for="inputEmail" class="col-lg-3 control-label">Last Name</label>
      <div class="col-lg-9">
	  <input class="form-control" id="last_name" name="last_name" placeholder="Last Name" type="text" required="required">
		</div>
	<br><br>
	<label for="inputEmail" class="col-lg-3 control-label">Enrolment Number</label>
      <div class="col-lg-9">
	  <input class="form-control" id="enrollment_number" name="enrollment_number" 
	  placeholder="Enrolment Number / Temporary Enrolment Number(For First year Student)" type="text" 
	  required="required" data-parsley-minlength="3" data-parsley-maxlength="12" maxlength="12">
		</div>
		<br><br>

	<label for="inputEmail" class="col-lg-3 control-label">Confirm Enrolment Number</label>
      <div class="col-lg-8">
	  <input class="form-control" onpaste="return false;" id="c_eno" placeholder="Confirm Enrolment Number " type="text" required="required"
	   data-parsley-equalto="#enrollment_number" data-parsley-equalto-message="Enrollment didn't match">
		</div>
		</div>
    
    <div class="form-group">

	<label for="inputEmail" class="col-lg-3 control-label">GIT Email id</label>
      <div class="col-lg-8">
	  <input class="form-control" id="email_id" name="email_id" placeholder="GIT Email id" type="text" 
	  required="required" data-parsley-type="email">
	</div>
    </div>
    
    <div class="form-group">

	<label for="inputEmail" class="col-lg-3 control-label">Password</label>
      <div class="col-lg-8">
	  <input class="form-control" name="password" id="password" type="password" 
	  required="required" data-parsley-minlength="6" placeholder="password must be minimum 6 charachters long." >
	</div>
    </div>
    
    <div class="form-group">

	<label for="inputEmail" class="col-lg-3 control-label">Confirm Password</label>
      <div class="col-lg-8">
	  <input class="form-control" name="c_password" id="c_password" type="password" 
	  required="required" data-parsley-minlength="6" placeholder="Confirm Password."  
       data-parsley-equalto="#password" data-parsley-equalto-message="Passwords don't match">
	</div>
    </div>
    
	<div class="form-group">

		<label for="inputEmail" class="col-lg-3 control-label">Contact Number</label>
      <div class="col-lg-8">
	  <input class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number " type="text" 
	  required="required" data-parsley-type="number" data-parsley-minlength="10" maxlength="11">
		</div>
		
    </div>
	
    
    <div class="form-group">
		<label for="select" class="col-lg-3 control-label">Semester (select)</label>
		<div class="col-lg-4">
        <select class="form-control" id="semester" name="sem" required="required">
          <option value=""disabled selected>Select your option</option>
		  <option value="1">1st</option>
          <option value="3">3rd</option>
          <option value="5">5th</option>
		  <option value="7">7th</option>
        </select>
		</div>
    </div>
        
    <div class="form-group">
        
		<label for="select" class="col-lg-3 control-label">Division</label>
		<div class="col-lg-2">
        <select class="form-control" name="division" required="required">
          <option value=""disabled selected>Select your option</option>
		  <?php 
            $result=mysqli_query($connection,"SELECT *from `batch_div` WHERE `type`='d'");
            while($row=mysqli_fetch_assoc($result)){
                echo "<option value='".$row['value']."'>".$row['front_view']."</option>";
            }
          ?>
        </select>
		</div>
        
        <label for="select" class="col-lg-3 control-label">Batch</label>
		<div class="col-lg-2">
        <select class="form-control" name="batch" required="required">
          <option value=""disabled selected>Select your option</option>
		  <?php 
            $result=mysqli_query($connection,"SELECT *from `batch_div` WHERE `type`='b'");
            while($row=mysqli_fetch_assoc($result)){
                echo "<option value='".$row['value']."'>".$row['front_view']."</option>";
            }
          ?>
        </select>
		</div>
        
    </div>

    <!--div class="alert alert-danger">
	Your Enrollment ID wil be used to send you confirmation email. 
	Untill and Unless you confirm your email you can't login.
	</div-->
	<center>
    <div class="form-group">
      <div class="col-lg-12">
        <input type="submit" name="register"class="btn btn-primary">
        <input type="reset" class="btn btn-info">
      </div>
    </div>
	</center>
	</fieldset>
</form>
</div>
</body>
</html>