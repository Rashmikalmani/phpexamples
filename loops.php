<!DOCTYPE html>
<html>
<body>
<?php
$x = "blue";
//for if else 
echo "for if else loop <br>";
if($x == "red"){
	echo "It is red color";
	
}
elseif($x == "blue"){
	echo "it is blue color";
}
elseif($x == "orange"){
	echo "it is orange color";
}
else{
	echo "none of these ";
}

echo "<br><br><br>";



//for loop
echo "for loop <br>";
for($y=1; $y<=10; $y++){
	echo "$y <br>";
}

echo "<br><br>";

//while loop
echo "while loop<br>";
 $i=0;
while($i<5){
	echo "$i <br>";
	$i++;
}
echo "<br><br>";

//do while loop
echo "do while loop";
$m=0;
do{
	echo "$m <br>";
	$m++;
}
while($m<=5);


?>
</body>
</html>