<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = "";
$name = $email = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  return $data;
}
?>

<h1>Contact Form</h1>
<p><span class="error">* required field.</span></p>
<table>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<tr>
	<td>Name:</td>
	<td><input type="text" name="name" value="<?php echo $name;?>"></td>
	<td><span class="error">* <?php echo $nameErr;?></span></td>
</tr>
<tr>
	<td>E-mail:</td>
	<td><input type="text" name="email" value="<?php echo $email;?>"></td>
	<td><span class="error">* <?php echo $emailErr;?></span></td>
</tr>  
<tr>
	<td>Website:</td>
	<td><input type="text" name="website" value="<?php echo $website;?>"></td>
	<td><span class="error"><?php echo $websiteErr;?></span></td>
</tr>
<tr>
	<td>Comment:</td>
	<td><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</form>
</table>
<br><br>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
?>

</body>
</html>
