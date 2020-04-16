<?php include 'header.php';?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="server.php" method="POST">
					<span class="login100-form-title p-b-32">
						Register 
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="password_1" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Re Enter Your Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="password_2" >
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="reg_user">
							Signup
						</button>
						
					</div>
				
					<h5> already  a user 
						<a href="index.php">Login</a></h5>

				</form>
			</div>
		</div>
	</div>
	
<?php include 'footer.php';?>
