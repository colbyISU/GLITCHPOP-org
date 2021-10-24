<?php
    include_once 'header.php';
?>

<div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="includes/login.inc.php" method="post">
				<span class="login100-form-title p-b-37">
					LOGIN
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Username/Email">
					<input class="input100" type="text" name="uid" placeholder="Username/Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
					<input class="input100" type="password" name="pwd" placeholder="Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit" type="submit">
						LOGIN
					</button>
				</div>

                <div class="text-center">
					<a href="signup.php" class="txt1 hov1">
						SIGN UP
					</a>
				</div>
				<br>
			</form>
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "<p style='color:#ff5e5e;;font-style:italic;font-style:italic;'>Error: Fill in all fields.</p>";
					}
					else if ($_GET["error"] == "invalidlogin") {
						echo "<p style='color:#ff5e5e;;font-style:italic;'>Error: Incorrect login credentials.</p>";
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