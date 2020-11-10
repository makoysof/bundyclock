<!DOCTYPE html>
<html>
<head>
	<title>Bundy Clock</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2B5E8E;">
	  <a class="navbar-brand" href="#" style="color: #ffff">Bundy Clock</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active" >
	        <a class="nav-link" href="/home" style="color: #ffff;">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item" >
	        <a class="nav-link" href="/myQR" style="color: #ffff;">My QR</a>
	      </li>
	      
	    </ul>
	      <a href="{{ route('logout') }}" style="color: #ffff;"> Logout </a>
	  </div>
	</nav>
	
	<div class="card" style="width: 22rem; margin-left: 40%;margin-top: 5%;">
	  <div class="card-header" style= "font-family: lato, sans-serif;">
	     <b>Hi, {{Auth::user()->firstname}}!</b>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item" style="background-color: #2B5E8E">
	    	<div id="clock" onload = "currentTime()" class="clock" style="color: #ffff; font-size: 56px; text-align: center; padding-top: 40px; padding-bottom: 40px; font-family: lato, sans-serif;">
	 		</div> 
		</li>
	    <li class="list-group-item"><a href="/time_in" style="display: flex; justify-content: space-around;font-family: lato, sans-serif;"> Time in</a></li>
	    <li class="list-group-item"><a href="/time_out" style="display: flex; justify-content: space-around;font-family: lato, sans-serif;">Time out</a></li>
	    <li class="list-group-item" style="display: flex; justify-content: space-around;font-family: lato, sans-serif;">Total working hours:</li>
	  </ul>
	</div>

	<script>
		function currentTime(){
			var date = new Date();
			var hours = date.getHours();
			var minutes = date.getMinutes();
			var sec = date.getSeconds();
			hours = updateTime(hours);
			minutes = updateTime(minutes);
	  		sec = updateTime(sec);
			document.getElementById("clock").innerText = hours + " : " + minutes + " : " + sec; /* adding time to the div */
    		var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
		}
		function updateTime(k) {
  			if (k < 10) {
    			return "0" + k;
  			}
  			else {
    			return k;
  			}
		}
		currentTime();
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

