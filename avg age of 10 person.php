<!DOCTYPE html>
<html>
<head>
	<title>average age of 10 person</title>
</head>
<body>
	<?php

	$person_age = array(   // Decleration of associative array
		
		'Easa' => 20,
		'John' => 25,
		'Sam' => 27,
		'Richard' => 22,
		'Tony' => 35,
		'Steve' => 32,
		'Henry' => 40,
		'Jack' => 55,
		'Tom' => 25,
		'Ram' =>30
	);



    //printing array structure
	$sum = array_sum($person_age); // getting sum of array
	printf("The sum of all age is $sum");

	$avg = $sum/10;
	print"<br>";
	print("The average is $avg")


	



	?>

</body>
</html>