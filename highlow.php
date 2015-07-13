<?php

function randomNumber(){ 

	$rand = rand(1, 100); 
	echo $rand . PHP_EOL;
	$attempts = 0; 

	fwrite(STDOUT, 'Guess a number between 1 and 100: ') . PHP_EOL;
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
		$y = 'y'; 
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

randomNumber();


?>