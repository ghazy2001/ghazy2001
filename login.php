

<?php include 'inc/header.php';
 ?>
<?php
if(isset($_SESION['Uid'])){
  
}
if(isset($_POST['go'])){
    
    $email    = $_POST['email'];
    $pass     = $_POST['pass'];

    
 if(empty($email) || empty($pass) )
    {
      echo 'please fill all fields';
    }else{
    $selectALL = "SELECT * FROM `users` WHERE u_email='$email' &&  u_pass='$pass'";
    
          $result = $conn->query($selectALL);
      
         if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
$_SESSION['Uid']= $row[u_id];
    $_SESSION['Uname']= $row[u_name];
      $_SESSION['Uemail']= $row[u_email];
        $_SESSION['Upass']= $row[u_pass];
            header("location: user.php");
   }

}
 }
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">welcome back</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form method="post" accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="pass" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input name="go" class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
                      <hr/>
                   
			    </div>
			</div>
		</div>
	</div>
</div>

 <?php include 'inc/fotter.php';?>