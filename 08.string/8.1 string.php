<?php
/*
//Difference between single and double quotation:
// $name = 'Rabeya Sultana';
// echo "My name is $name";

// $name = 'Rabeya Sultana';
// echo "My name is \n \t $name";//result show korbe

$name = "Rabeya Sultana";
//echo 'My name is \n \t $name';//result show korbe na karon single qoutation a ja likha hbe hubohu seta show korbe

// echo "I\'m $name";

//Here doc:

$text = <<<EOT
This is
    multiline
        String
EOT;
echo $text;

$text = <<<EOT
This is
    multiline $name
        String
EOT;
echo $text;//variable name read korte parbe

//now doc:

$text = <<<'EOT'
This is
    multiline $name
        String
EOT;
echo $text;//variable name read korte parbe na


//building function
$sentence = "PHP is awesome";
echo strlen($sentence) . "\n";//letter count no:strln()
echo str_word_count($sentence) . "\n";//word count no:str_word_count()
echo strrev($sentence) . "\n";//ulta lekha:strrev()
echo strpos($sentence, "is") . "\n";//exact word count no:strpos()
echo str_replace("awesome", "Powerful", $sentence) . "\n";//word replacement:str
_replace()
echo strtolower($sentence) . "\n";//lower case:strtolower()
echo strtoupper($sentence) . "\n";// for upper case:strtoupper()

$extraSpace = "  Laravel is very wonderful framework  " . "\n";
echo trim($extraSpace) . "\n";//extra space remove kora:trim()
echo substr($extraSpace, 2,7) . "\n"; //substr()
echo substr($extraSpace, 0,7) . "\n"; 

$str1 = "apple";
$str2 = "Apple";
 echo strcmp($str1, $str2) . "\n"; //strcmp()
 echo strcasecmp($str1, $str2) . "\n"; //strcasecmp()
 */

 $passward = "secret" . "\n";
 echo md5($passward) . "\n"; //md5()
 echo sha1($passward) . "\n"; //shal()