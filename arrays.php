<!DOCTYPE html>
<html>
<body>
<?php 
$names= array("rashmi","poornima","kanchana");
//foreach loop
foreach($names as $x)
{
	echo "$x<br>";
}
	echo"<br><br>";
	echo "$names[0]<br>";
	echo "$names[1]<br>";
	echo "$names[2]<br>";
	
	echo"<br><br>";
//for loop
$arrlength = count($names);
echo "array length=","$arrlength<br>";
for ($x= 0; $x<$arrlength;$x++){
	echo "$names[$x]<br>";
}	
//array merging using var_dump function
echo "<br><br>";
$colors=array("blue","black","yellow");
$colorss=array_merge($colors,$names);
echo "//using var_dump function";
var_dump($colorss);
echo "<br><br>";


//array merging using print_r function

$colors=array("blue","black","yellow");
$colorss=array_merge($colors,$names);
echo "//using print_r function<br>";
print_r($colorss);
echo "<br>";
sort($colorss);//used to arrange in alphabetical order
print_r($colorss);

	
	
?>
</body>
</html>
