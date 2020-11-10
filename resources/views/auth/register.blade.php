<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(43,94,142,.8);">
	<div class = "container">
		<div class = "row justify-content-center" style="margin-top: 40px; ">
		<div class = "card" style="width: 35rem; box-shadow: 0px 18px 16.92px 1.08px rgba(0, 0, 0, 0.35);">
			<div class ="card-body">
				<div class = "row justify-content-center">
					<div class="col-4">    
						<a href = "/"><img src='images/BLINC-05.png' style="width:158px;height:158px;"></a>
					</div>
				</div>
							<h3>Create an account</h3>
							<form method="POST" action="{{route('register')}}" style="margin-top: 30px;">

								@csrf

							  <div class="form-group">
							  	<div class = "row">
							  		<div class = "col-6">
								    <label for="idnumber">Employee Number</label>
								    <input type="text" class="form-control" id="idnumber" name = "idnumber" placeholder="ID number">
								</div>
								</div>
							  </div>
							  <div class="form-group">
							  	<div class = "row">
							  		<div class = "col-6">
									    <label for="firstname">Name</label>
									    <input type="text" class="form-control" id="firstname" name = "firstname" placeholder="First Name">
									</div>
									<div class = "col 12">
										<label for ="lastname" style= "visibility:hidden;">Last Name</label>
									    <input type="text" class="form-control" id="lastname" name = "lastname" placeholder="Last Name">
									</div>
								</div>
							  </div>
							  <div class="form-group">
							  	<div class = "row">
							  		<div class = "col-8">
									    <label for="email">Email</label>
									    <input type="email" class= "form-control" id ="email" name="email" placeholder="example@gmail.com">
									</div>
								</div>
							  </div>
							  <div class="form-group">
							  	<div class = "row">
							  		<div class = "col-6">
									    <label for="password">Password</label>
									    <input type="password" class="form-control" id="password" name = "password" placeholder="Password">
									</div>
									<div class = "col 12">
										<label for ="password_confirmation" style= "visibility:hidden;">Confirm Password</label>
									    <input type="password" class="form-control" id="password_confirmation" name = "password_confirmation" placeholder="Confirm Password">
									</div>
								</div>
							  </div>
							  <button type="submit" class="btn btn-primary rounded" style="margin-bottom: 50px; width: 120px;">Register</button>
							</form>

			</div>
		</div>
		</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





