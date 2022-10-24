<?php
// Include config file
include("config.php");
 
// Define variables and initialize with empty values
$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    $temp_username = trim($_POST["username"]);
    $sql = "SELECT id FROM users WHERE username = '$temp_username'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $username_err = "This username is already taken.";
    }else{
        $username = trim($_POST["username"]);
    }
    
    // Validate emai;
    $temp_email = trim($_POST["email"]);
    $sql = "SELECT id FROM users WHERE email = '$temp_email'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $email_err = "This email is already taken.";
    }else{
        $email = trim($_POST["email"]);
    }

    // Validate password
    if(strlen(trim($_POST["password1"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    }else{
        $password = trim($_POST["password1"]);
    }
    
    // Validate confirm password
    $confirm_password = trim($_POST["password2"]);
    if(empty($password_err) && ($password != $confirm_password)){
        $confirm_password_err = "Password did not match.";
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err))
    {
    	$sql= "insert into users (username,pass,email) values ('$username', '$password','$email')";
        mysqli_query($conn, $sql);
        header("location: login.html");	
        // disconnect from database
        mysqli_close($conn);    
    }
}
   

?>


<!DOCTYPE html>
<html>
<head>
	<title>Resister</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #7abecc !important;
		}
		.user_card {
			width: 500px;
			margin-top: auto;
			margin-bottom: auto;
			background: #74cfbf;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}

		.form_container {
			margin-top: 20px;
		}

		#form-title{
			color: #fff;
		}
		.login_btn {
			width: 100%;
			background: #32CD32 !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #f7ba5b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

	</style>

</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<h3 id="form-title">REGISTER ACCOUNT</h3>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<!-- {% csrf_token %} -->
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><?php echo $username_err; ?><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" placeholder="Username..." class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" id="username" required >
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><?php echo $email_err; ?><i class="fas fa-envelope-square"></i></span>
							</div>
							<input type="text" name="email" placeholder="Email..." class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" id="Email" required>
							
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"><?php echo $password_err; ?></i></span>
							</div>
							<input type="password" name="password1" placeholder="Password1..." class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>"id="password1" required>
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"><?php echo $confirm_password_err; ?></i></span>
							</div>
							<input type="password" name="password2" placeholder="password2..." class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" id="password2" required>
						</div>

				   		<div class="d-flex justify-content-center mt-3 login_container">
				 			<input class="btn login_btn" type="submit" value="Register Account" 	href= "login.html">
				   			<input type="reset" class="btn btn-secondary ml-2" value="Reset">
				   		</div>

					</form>
				</div>

				<!-- {{form.errors}} -->
				
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already have an account? <a href= "login.html" class="ml-2">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
						/* Because i didnt set placeholder values in forms.py they will be set here using vanilla Javascript
		//We start indexing at one because CSRF_token is considered and input field 
		 */

		//Query All input fields
		var form_fields = document.getElementsByTagName('input')
		form_fields[0].placeholder='Username..';
		form_fields[1].placeholder='Email..';
		form_fields[2].placeholder='Enter Password...';
		form_fields[3].placeholder='Confirm Password...';

		for (var field in form_fields){	
			form_fields[field].className += ' form-control'
		}
	</script>
</body>
</html>

