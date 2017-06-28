<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$nameErr = $mailErr= $phoneErr= $genderErr="";
$name = $mail = $phone=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	
	if(empty($_POST["fname"])){
		$nameErr="Name is required";
		}
	else{
	$name=test_input($_POST["fname"]);
}

if(empty($_POST["mail"])){
	$mailErr="mail-id required";

}
else{
	$mail=test_input($_POST["mail"]);
}
if(empty($_POST["phone"])){
	$phoneErr="mobile-no required";

}
else{
	$phone=test_input($_POST["phone"]);
}
if(empty($_POST["gender"])){
	$genderErr="mobile-no required";

}
else{
	$gender=test_input($_POST["gender"]);
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Name:

<input type="text" name="fname">
 <span class="error">*<?php echo $nameErr;?></span>
  <br><br>
  email:
<input type="text" name="mail">
<span><?php echo $mailErr;?></span> <br><br>
Mobile-no:
<input type="text" name="phone">
<span><?php echo $phoneErr;?></span> <br><br>
gender:
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<span class="error">*<?php echo $genderErr;?></span><br><br>
<input type="submit">
</form>
<?php 
echo "$name <br>";
echo "$mail<br>";
echo "$phone<br>";
echo "$gender<br>";
?>
</body>
</html>