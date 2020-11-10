<!DOCTYPE html>
<html>
<head>
	<title>Bundy Clock</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body style="background: rgb(43,94,142,.8);">
	<div class = "container">
		<div class = "row justify-content-center" style="margin-top: 100px; ">
		<div class = "card" style="width: 30rem; box-shadow: 0px 18px 16.92px 1.08px rgba(0, 0, 0, 0.35);">
			<div class ="card-body">
				<div class = "row justify-content-center">
					<div class="col-5">    
						<img src='images/BLINC-05.png' style="width:158px;height:158px;">
					</div>
				</div>
					<div class = "row justify-content-center">
						<div class ="col-6">
							<h3>Employee Login</h3>
							<form action = "/login" method="POST">
								@csrf
							  <div class="form-group">
							    <label for="idnumber">ID Number</label>
							    <input type="text" class="form-control" id="idnumber" name = "idnumber">
							  </div>
							  <div class="form-group">
							    <label for="password">Password</label>
							    <input type="password" class="form-control" id="password" name = "password">
							  </div>
							  <div class = "row justify-content-center">
							  	<button type="submit" class="btn btn-outline-primary">Submit</button>
							  </div>
							  <div class = "row justify-content-center">
							  	<a href ="/register" class = "text-muted">Create Account</a>	  	
							  </div>
							</form>
						</div>
					</div>
			</div>
		</div>
		</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>