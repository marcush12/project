
<?php  session_start();  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Project: Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    				<div class="row">
    					<div class="col-md-2"></div>
    					<div class="col-md-8">
    						<h1>Register</h1>
                <?php
                if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']); //to get rid of session
                }
                  ?>
    						<hr>
    						<form id='registerform' class='form-horizontal' name='registerform' action="/doRegister.php" method='post'>
    							<div class="form-group">
    								<label for="first_name" class='col-sm-2 control-label'>First Name</label>
    								<div class="col-sm-10">
    									<input type="twxt" class='form-control' id='first_name' placeholder='First Name'>
    								</div>
    							</div>
    							<div class="form-group">
    								<label for="last_name" class='col-sm-2 control-label'>Last Name</label>
    								<div class="col-sm-10">
    									<input type="text" class='form-control' id='last_name' placeholder='Last Name'>
    								</div>
    							</div>
    							<div class="form-group">
    								<label for="username" class='col-sm-2 control-label'>Email</label>
    								<div class="col-sm-10">
    									<input type="email" class='form-control' id='username' placeholder='user@example.com'>
    								</div>
    							</div>
    							<div class="form-group">
    								<label for="verify_username" class='col-sm-2 control-label'>Verify Email</label>
    								<div class="col-sm-10">
    									<input type="email" class='form-control' id='verify_username' placeholder='user@example.com'>
    								</div>
    							</div>
    							<div class="form-group">
    								<label for="password" class='col-sm-2 control-label'>Password</label>
    								<div class="col-sm-10">
    									<input type="password" class='form-control' id='password' placeholder='Password'>
    								</div>
    							</div>
    							<div class="form-group">
    								<label for="verify_password" class='col-sm-2 control-label'>Verify Password</label>
    								<div class="col-sm-10">
    									<input type="password" class='form-control' id='verify_password' placeholder='Verify Password'>
    								</div>
    							</div>
    							<hr>
    							<div class="form-group">
    								<div class="col-sm-offset-2 colsm-10">
    									<button type='submit' class='btn btn-primary'>Register</button>
    								</div>
    							</div>
    						</form>
    					</div>
    					<div class="col-md-2">

    					</div>
    				</div>
    			</div>

  </body>
</html>
