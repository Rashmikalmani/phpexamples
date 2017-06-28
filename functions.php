<!DOCTYPE html>
<html>
<body>
<?php
$y=50;
function sum(){
$x = 20;   //local variable
global $y;  //global variable
echo "output of local and global variables,<br>";
echo $x ,"<br>";
echo $y ,"<br>";
echo $x+$y,"<br>
<br><br>";

}
sum();



//static variables
echo "static variable result,<br>";
function second(){
	static $a=30;
	$a++;
	
	echo $a,"<br>";
}
second();
second();
second();
second();
second();
?>

</body>
</html>