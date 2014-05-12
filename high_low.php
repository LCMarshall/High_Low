<?php

//computer assigns a random number

$number = rand(1, 100);
$guesses = 0;

//If users guess is correct echo you won, 
//If users guess is wrong, tell user too high or too low
do {
	fwrite(STDOUT, 'Guess a number between 1-100. ');

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