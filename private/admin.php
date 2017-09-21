<html>
<link rel="stylesheet" href="../style.css" type="text/css" />
<?php
	function SignIn()
	{
		if(!empty($_POST['user']))
		{
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to mySQL: " . mysqli_connect_error();
			}

			$user = $_POST[user];
			$pass = $_POST[pass];

			$con=mysqli_connect("localhost","root","password","users");
			$query = mysqli_query($con,"SELECT * FROM UserName where userName = '$user' AND pass = '$pass' limit 0,1");
			$rows = mysqli_fetch_array($query);
			if ($rows)
			{
				$_SESSION['username'] = $user;
				echo "Login successful! Hello " . $user;
			}
			else
			{
				echo "Access denied!";
			}
			
		}
	}

	if(isset($_POST['submit'])) 
	{
		SignIn(); 
	}
?>

</html>