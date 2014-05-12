<?php

//computer assigns a random number
if ($argc == 3){

	$min = $argv[1];
	$max = $argv[2];
} else {
	echo "Please give me two numbers. A minimum first and then a maximum.";
	exit (0);
}
if (!is_numeric ($min) || !is_numeric ($max)){
	echo "Must be numeric.";
	exit (0);
}


$number = rand($min, $max);
$guesses = 0;

//If users guess is correct echo you won, 
//If users guess is wrong, tell user too high or too low
do {
	fwrite(STDOUT, "Guess a number between the {$min} and {$max}. ");

	// Write the output
	// Get the input from user
	$users_guess = (int) fgets (STDIN);
	$guesses++; 
	if ($users_guess < $number){
		echo "Too low, Please pick another number\n";
	} else if ($users_guess > $number) {
		echo "Too high, Please pick another number\n";
	}	
	} while ($users_guess != $number);

echo "Good Guess!!\n";
fwrite (STDOUT, "You guessed right in $guesses guesses! \n");