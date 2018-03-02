<?php
		session_start();
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
		require_once('server.php');
			$name=$_POST['uname'];
			//echo $name;
			$password=md5($_POST['pass']);
			$sql = "select * from user where username='$name' and password='$password'";
			// echo $sql;
			$results = mysqli_query($con,$sql) or die(mysqli_error($con));
			echo mysqli_error($con);
			// var_dump($results);
			if(mysqli_num_rows($results)>0)
			 {
                 $_SESSION['name'] = $name;
                 header("Location:dashboard.php");	//student dashboard
					
			}

			else{
				echo "Please";   echo '<a href="login.html">  Register</a>';
			}
?>