<?php

//computer assigns a random number
//computer echos pick a number between 1-100

$number = rand(1, 100);

fwrite(STDOUT, 'Guess a number between 1-100. ');

// Write the output
// Get the input from user
$users_guess = (int) fgets (STDIN);

// Output the user's guess
fwrite(STDOUT, "");

//If users guess is correct echo you won, 
//If users guess is wrong, tell user too high or too low
While ($users_guess == $number){
	echo "YOU WIN!!";
}
	if ($users_guess < $number){
		echo "Too low, Please pick another number\n";
	}
		else if ($users_guess > $number) {
		echo "Too high, Please pick another number\n";
		}
