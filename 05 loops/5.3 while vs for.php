<?php
// kotobar ghurbe seta jana thakle for loop use korbo nahole while loop use korbo

//kotobar ghurbe seta jana thakle
for( $i = 1 ; $i <= 10 ; $i++ ){
    echo "5 x $i = " . (5 * $i) . "\n";

} 

//kotobar ghurbe seta jana na thakle

$i = 1;
while ( $i <= 5 ){
    echo "$i\n";
    $i++;
}

$correctPassword = "12345";
$userInput = "";
while ( $userInput != $correctPassword ){
  $userInput = readline ( "give correct password: " );
}