<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php


$d = date ("Fri");

if ($d=="Fri") {
	echo "Have a nice weekend"; }
	
else { echo "Today is ".$d; }



$cc = 'SE';

switch ($cc) {
	case 'SE':
		echo 'Sweden';
		break;
	case 'DK':
		echo 'Denmark';
		break;
	default:
		echo 'unknown countrycode';
}

$i=1;
	while($i<=5) {
		echo "The number is " . $i . "<br />";
		$i++;
	}
?>


<?php

$petlist = array('dog', 'cat', 'lion', 'horse');

	foreach ($petlist as $pet) {
		echo 'Pet is ' .$pet.'<br/>';
	}



?>

<hr>
<?php

function myFunction($str) {
	
	echo 'Wee - my function was called with the parameter '.$str.'<br>'.PHP_EOL;

}

myFunction('test');
?>


</body>
</html>