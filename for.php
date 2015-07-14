<?php

fwrite(STDOUT, 'Please pick a beginning number: ') . PHP_EOL;
$beg = trim(fgets(STDIN));

while ($beg != is_numeric($beg)){
	fwrite(STDOUT, 'That entry was invalid. Please pick a beginning number: ') . PHP_EOL;
	$beg = trim(fgets(STDIN));
}

fwrite(STDOUT, 'Please pick an ending number: ') . PHP_EOL;
$end = trim(fgets(STDIN));

while ($end != is_numeric($end)){
	fwrite(STDOUT, 'That entry was invalid. Please pick an ending number: ') . PHP_EOL;
	$end = trim(fgets(STDIN));
}

fwrite(STDOUT, 'Please pick an incrementor: ') . PHP_EOL;
$count = trim(fgets(STDIN));

if ($count == 0){
	$count++;
}

for ($i = $beg; $i <= $end; $i += $count){
	echo "{$i}\n";
}








?>