<?php


for ($test = 1; $test <= 100; $test++){
	if ($test % 15 == 0){
		echo "FizzBuzz" . PHP_EOL;
	} else if ($test % 5 == 0){
		echo "Buzz" . PHP_EOL;
	} else if ($test % 3 == 0){
		echo "Fizz" . PHP_EOL;
	} else {
		echo $test . PHP_EOL; 
	}
}







?>