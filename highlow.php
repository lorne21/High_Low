<?php

if ($argc == 1) {
    fwrite(STDOUT, 'Please pick a minimum number: ') . PHP_EOL;
	$min = fgets(STDIN);
	fwrite(STDOUT, 'Please pick a maximum number: ') . PHP_EOL;
	$max = fgets(STDIN);
} else if ($argc == 3){
	$min = $argv[1];
	$max = $argv[2];
}

function randomNumber($min, $max){ 

	$rand = rand($min, $max); 
	echo $rand . PHP_EOL;
	$attempts = 0; 

	fwrite(STDOUT, 'What number am I thinking ') . PHP_EOL;
	$userGuess = fgets(STDIN);

	do {
		if ($userGuess > $rand){ 
			$attempts += 1;
			// echo ($attempts);
			fwrite(STDOUT, 'Lower. Try again: ') . PHP_EOL; 
			$userGuess = fgets(STDIN);   
		} else if ($userGuess < $rand){
			$attempts += 1;
			// echo ($attempts);
			fwrite(STDOUT, 'Higher. One more time: ') . PHP_EOL; 
			$userGuess = fgets(STDIN);  
		}
	} while ($userGuess != $rand); 

	if ($userGuess == $rand){
		$attempts += 1; 
		fwrite(STDOUT, 'This is why everyone hates you, Professor X.  ') . PHP_EOL; 
		echo 'It took ' . $attempts . ' attempts.' . PHP_EOL; 
		fwrite(STDOUT, 'Would you like to play again?(y/n) ') . PHP_EOL; 
		$replay = trim(fgets(STDIN));
		if ($replay == 'y'){
			randomNumber();
		}
		

	} 
}

randomNumber($min, $max);



?>