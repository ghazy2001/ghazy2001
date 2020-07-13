
 <?php include 'inc/header.php';?>
<?php

if(isset($_POST['sub'])){
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $pass     = $_POST['pass'];
    $pass2    = $_POST['pass2'];
    
   if(empty($name) || empty($email) || empty($pass) || empty($pass2))
    {
      echo 'please fill all fields';

  
     } else{
       $selectALL = "SELECT * FROM `users` WHERE u_email='$email' &&  u_pass='$pass'";
    
          $result = $conn->query($selectALL);
      
         if ($result->num_rows > 0){
                echo 'this email already exists <a class="btn" href="login.php">login</a>';
      }
    
    elseif ($pass <= 7) {
       echo "password must be greater than 8";
    }
    elseif ($pass2 != $pass){
       echo 'passwords not match';
    }
 else {$sql = "INSERT INTO users (u_name, u_email, u_pass)
VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "signed up successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
       //$sqltest = "INSERT INTO `test` (`u_id`, `u_name`, `u_email`, `u_pass`) VALUES ('NULL', '$name', '$email, '$pass');";
    // $conn->query($sqltest);
       // {
       // echo 'great,you have registered successfully';
    
}
}

}
?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form method="post" role="form">
			    			<div class="row">
			    		
			    					<div class="form-group">
			                <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				
			    			

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="pass" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="pass2" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input name="sub" type="submit" value="Register" class="btn btn-info btn-block">
			    		</div>
			    		</form>
			    	
	    		</div>
    		</div>
    	</div>
    </div>
 <?php include 'inc/fotter.php';?>