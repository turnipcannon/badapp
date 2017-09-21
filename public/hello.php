<html>
<head>
	<title>Hello!</title>
	<link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body id="body-color">
<?php
	if(!empty($_GET['name']))
	{
		echo "<h1>Hello " . $_GET['name'] . "!</h1>";
	}
	else
	{
		echo "<h1>What is your name?</h1>";
	}
?>
</body>
</html>
