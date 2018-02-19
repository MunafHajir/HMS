<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>login and register form design</title>
	<link rel="stylesheet" href="log.css">
</head>
<body>
	<div class="login-page">
		<div class="form" >
				<form class="register-form" method="POST">
				<input type="text" placeholder="User Name"/>
				<input type="email" placeholder="Email Id"/>
 				<input type="password" placeholder="Password"/>
 				<input type="password" placeholder="Confirm Password"/>
				<input type="text" placeholder="Contact No."/>
  				<button> <b>Create</b></button>
				<p class="message">Already registered ?  <a href="#">login</a></p>
				</form>
			<form class="login-form">
				<input type="text" placeholder="User Name"/>
				<input type="text" placeholder="Password"/>
				<button> <b>login</b></button>
				<p class="message">Not Registered ?  <a href="#">Register</a></p>
			</form>
			</div>
	</div>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script >
	 $('.message a').click(function(){
     $('form').animate({height:"toggle" , opacity:"toggle"}, "slow");
    });
</script>
</body>
</html>