<?php
		session_start();
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
		require_once('server.php');
		if($_POST){
			$name=$_POST['uname'];
			echo $name;
			$password=md5($_POST['pass']);
			$sql = "select * from user where username='$name' and password='$password'";
			//echo $sql;
			$results = mysqli_query($con,$sql) or die(mysqli_error($con));
			echo mysql_error($con);
			//var_dump($results);
			if(mysqli_num_rows($results)>0)
			 {
					echo "Wel-Come".$name;
			 		//header("Location:student-dashboard.php");	//student dashboard
					
		}
?>