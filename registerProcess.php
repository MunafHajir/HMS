<?php
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
		require_once('server.php');
		if($_POST){
			$uname = $_POST['uname'];
			$email = $_POST['email'];
			$pass = md5($_POST['password']);
			$cno = $_POST['cno'];
			$query="insert into user(username,password,email_id,contact_no) values('$uname','$pass',
			'$email','$cno')";
			mysqli_query($con,$query);
			echo mysqli_error($con);
			header("Location:login.html");		
		}
?>