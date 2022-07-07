<?php

include ('header.php');

if (isset($_POST['login']))
{
	
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$xyz="select * from users where email='$email' and password='$pass'";
	
	$sql =mysqli_query($con, $xyz);
		
	$rows = mysqli_num_rows($sql);

	while ($row = mysqli_fetch_array($sql)){

	$name = $row ['name'];
	$email = $row ['email'];
	$password = $row ['password'];
	

	
	if ($rows==1) {
		
		$_SESSION['email']= $email;
		$_SESSION['password']= $pass;
		$_SESSION['name'] = $name;
		echo "<script> window.open ('user_home.php', '_self') </script>";
		
	}
	
	else {
		
		echo"<script>alert('Email/Password is incorrect.')</script>";
		
	}
	
	}
	
	
}

?>



<style>


.main{
    margin-top: 50px;
}

.main-content {
    background-color:#9e9e9ea3 !important;
    border: 2px solid #9e9e9ea3;
    margin: 0 auto;
    max-width: 500px;
    padding: 20px 40px;
    color: #ccc;
    text-shadow: none;

}


.input-group{
	margin: 20px 0px;
}
.input-group-addon {
    color: #009edf ;
    font-size: 17px;
}
.login-button{
    margin: 0px auto;
    max-width: 200px;;
    
}


.form-header{
    max-width: 500px;
    margin: 0 auto;
    background-color:#9e9e9ea3;
    color: #fff;
    width: 100% ;
    padding: 20px 0px;
    border-top-right-radius:10px ;
    border-top-left-radius:10px 
}
.remember{
    color: black;
}



</style>



<section class="login-info">
<div class="container">
  <div class="row main">
       <div class="form-header">
          <h1 class="text-center"> User Login </h1>
        </div>
    <div class="main-content">
            
            <form method="post">
            
          <div class="input-group ">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="Enter your Email">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Enter your Password">
          </div>
      
          
          <div class="form-group ">
              <input type="submit" name="login"  class="btn btn-success btn-lg btn-block " value="Login">
			 

          </div>
          
</form>
      
      </div>
    </div>
</div>
</section>
<br>
<br>
<br>

<?php include 'footer.php'; ?>