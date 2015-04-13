<html>
	<head>
		<script src='assets/js/jquery-2.1.3.min.js'></script>
		<script src='assets/js/bootstrap.js'></script>
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
		<meta charset="UTF-8">
		<style type="text/css">
			body {
				width: 100%;
				height: 100%;
			}
		</style>
	</head>

	<body>
		
		<!-- navigation bar //-->
		<?php include("header.php"); navbar(); ?>

		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-signin">
							<h2>Log in</h2>
							<label for="inputEmail" class="sr-only">Email address</label>
							<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" style="margin-top:7px;" id="inputPassword" class="form-control" placeholder="Password" required>
							<div class="checkbox">
							<label>
							<input type="checkbox" value="remember-me"> Remember me
							</label>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
	</body>
	
</html>