<?php
/*//multiple data store kore
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

$csv = "Mango, Jackfruit, Litchi";
$fruits = explode( ",", $csv);//building function,,string to array

print_r($fruits);


$csv = "Mango,Jackfruit,Litchi";
$fruitsStr = implode("-",$fruits); //array to string

print_r($fruitsStr);

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
print_r($json);*/

//for each loop:array niye kaj kore

// array()
// array[]:index array
// key+value:associative array
// array r vitore r o array thakle seta k multidimensional array boli/nested array

//by index array for each loop
/*$fruits = ["Mango", "Jackfruit", "Litchi"];
foreach ( $fruits as $fruit ){//joto value thakbe sobay k check dibe
    // echo $fruit . " ";
    echo $fruit . "\n";
}*/

//by associative array :result ase pair akare(key=value)
// $person = [
//     'name' => 'Rabeya',
//     'city' => 'Satkhira'
// ];
// print_r($person);

//by associative array for each loop
$person = [
    'name' => 'Rabeya',
    'city' => 'Satkhira',
    'phone' => '12344455566777'
];
foreach ( $person as $key => $value ) {
    // echo "$key : $value\n";

}
// print_r($person);
//kono ekta value remove korte chaile
$person = [
    'name' => 'Rabeya',
    'city' => 'Satkhira',
    'phone' => '12344455566777'
];
// unset($person['name']);//building function
// print_r($person);

//array r moddhe empty value thakle actual value kivabe ber korbo

$data = ['mango', '', null];
$filtered = array_filter($data);
// print_r($filtered);

$user = ['name' => 'Rabeya', 'email' => 'sultanarabeya21@gmail.com'];
// extract($user);
// echo $name;//extract kore key er man pete pari


//array slice

$numbers = range(1, 15);
$sliced = array_slice($numbers, 5, 5);
// print_r($sliced);

$numbers = range(1, 15);
$sliced = array_slice($numbers, 4, 1);
// print_r($numbers);
// print_r($sliced);

//array merge(ekotrikoron)

$arr1 = ['Mango', 'Jackfruit'];
$arr2 = ['Litchi', 'Pineapple'];
$merged = array_merge($arr1, $arr2);
// print_r($merged);

$fruits = ['Mango', 'Jackfruit'];
if(in_array('Mango', $fruits)){
    // echo "Found!\n";
}else{
    // echo "Not Found!\n";
}

$fruits = ['Mango', 'Jackfruit'];
if(in_array('Litchi', $fruits)){
    // echo "Found!";
}else{
//     echo "Not Found!";
}

$arr1 = ['Mango', 'Litchi'];
$arr2 = ['Litchi', 'Pineapple'];
$difference = array_diff($arr1, $arr2);
// print_r($difference);


$numbers = range(1, 15, 3);
print_r($numbers);

$numbers = range(2, 15, 2);//2 starting point, 15 ending point, 2 difference
print_r($numbers);