<?php
    include_once 'header.php';
?>



	<div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="includes/signup.inc.php" method="post">
				<span class="login100-form-title p-b-37">
					REGISTER
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Full Name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Username">
					<input class="input100" type="text" name="uid" placeholder="Username" autocomplete="off">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
					<input class="input100" type="password" name="pwd" placeholder="Password">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Re-enter Password">
					<input class="input100" type="password" name="pwdrepeat" placeholder="Repeat Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit" type="submit">
						SIGN UP
					</button>
				</div>
			</form>
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "<p style='color:white;font-style:italic;font-style:italic;'>Error: Fill in all fields.</p>";
					}
					else if ($_GET["error"] == "invaliduid") {
						echo "<p style='color:white;font-style:italic;'>Error: Please choose a proper username!</p>";
					}
					else if ($_GET["error"] == "invalidemail") {
						echo "<p style='color:white;font-style:italic;'>Error: Please use a valid email.</p>";
					}
					else if ($_GET["error"] == "pwdsdontmatch") {
						echo "<p style='color:white;font-style:italic;'>Error: Passwords do not match.</p>";
					}
					else if ($_GET["error"] == "stmtfailed") {
						echo "<p style='color:white;font-style:italic;'>Error: Something went wrong, please try again.</p>";
					}
					else if ($_GET["error"] == "usernametaken") {
						echo "<p style='color:white;font-style:italic;'>Error: Username already taken.</p>";
					}
					else if ($_GET["error"] == "none") {
						echo "<p style='color:white;font-style:italic;'>Error: You have signed up!</p>";
					}
					
				}
			?>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>


<?php
    include_once 'footer.php';
?>