<?php
session_start();
?>
<html>
	<head>
		<title>Bible Quiz</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/biblequiz/node_modules/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/biblequiz/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	</head>
	<body style="background-color:#f2f2f2;">
		<div class="container h-100">
			<div class="row h-100 justify-content-center align-self-center">
				<div class="mt-5">
					<div class="card" style="border:none;">
						<div class="row no-gutters">
							<div class="col">
								<img src="/biblequiz/static_rss/images/king-james-bible-1611-05_2000x.jpg" class="card-img-left">
							</div>
							<div class="col align-self-center pl-2 pr-2">
								<div class="card-block px-2">
									<h4 class="card-title text-center">Login</h4>
									<form>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
											  <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
											</div>
											<input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" placeholder="Enter email">
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
											  <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
											</div>
											<input type="password" class="form-control" id="user_pwd" placeholder="Enter password">
										</div>
										<div class="form-group text-right">
											<button type="button" id="btn_signin" class="btn btn-sm btn-success">Sign in</button>
										</div>
									</form>
								</div>
								<div class="card-block px-2 text-center">
									<a href="#">Forgot username/password ?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="/biblequiz/node_modules/jquery/dist/jquery.min.js"></script>
		<script src="/biblequiz/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="/biblequiz/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
	</body>
</html>