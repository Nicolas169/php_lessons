<?php
	// Given a string, delete all vocals, and show the result
	$words = "hello world!";

	// For ends by $words length
	for ($i=0; $i < strlen($words); $i++) {
		// If the char is a vocal, replace it by a blank char, and rest $i by 1, to mantain correct order
		if (substr($words, $i, 1) == 'a' || substr($words, $i, 1) == 'e' || substr($words, $i, 1) == 'i' || substr($words, $i, 1) == 'o' || substr($words, $i, 1) == 'u') {
			$words = substr_replace($words, '', $i, 1);
			$i=-1;
		}
	}
	// Show $word without vocals
	echo $words."<br>";

	// Delete all blank spaces on a String
	$words = "hello world, how are you?";

	for ($i=0; $i < strlen($words); $i++) { 
		if (substr($words, $i, 1) == ' ') {
			$words = substr_replace($words, '', $i, 1);
		}
	}

	echo $words;
?>