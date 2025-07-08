<?php
//multiple data store kore
$fruits = array(
    "Mango", "Jackfruit", "Litchi"
);
// echo $fruits[0];

//var_dump korle all information dekhte pabo

$fruits = array(
    "Mango", "Jackfruit", "Litchi"
);
//var_dump($fruits);
// print_r($fruits);//more readable

$number = [10, 20, 30];
array_push($number, 40); //last a add hbe
array_unshift($number, 5); //first a add korte chaile
array_shift($number);//first a delet korar jonno
array_pop($number);//last a delet korar jonno
// print_r($number); 
$student = [
    'name' => 'Sultana',
    'age' => 25,
    'department' => 'Mathematics'
];
// print_r($student);
// echo $student['department'];

//string k array te conversion:

/*$csv = "Mango, Jackfruit, Litchi";
$fruits = explode( ",", $csv);//building function,,string to array

print_r($fruits);


$csv = "Mango,Jackfruit,Litchi";
$fruitsStr = implode("-",$fruits); //array to string

print_r($fruitsStr);*/

$student = [
    ['name' => 'Rabeya Rabu', 'age' => 25],
    ['name' => 'Rabeya Bushra', 'age' => 23],
    ['name' => 'Rabeya Taposhi', 'age' => 24]

];
// print_r($student);

// echo $student[1]['name'];

$data = ['name' => 'Rabeya Sultana' , 'age' => 25];
$serialized = serialize($data);
print_r($serialized);

//data array convert to jeson data

$data = ['name' => 'Rabeya Sultana' , 'age' => 25];
$serialized = serialize($data);
$json = json_encode($data);
print_r($json);