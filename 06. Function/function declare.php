<?php
/*function greet() {
    echo "Welcome to the dream world!";
}
greet();
greet();
greet();
greet();
greet();


function add( $n1,$n2 ) { //parameter
    return $n1 + $n2;
}
echo add(10,10); //argument 

function add( $n1,$n2 = 5 ) { 
    return $n1 + $n2;
}
echo add(10,10);


***jodi default parameter add kora thake r argument ekta thake sekhettre argument er sathe default parameter add hobe. kintu notun argument add korle default parameter er sthane notun argument work korbe


function add( $n1,$n2 = 5 ) { 
    return $n1 + $n2;
}
echo add(10);

//variable

$globalVar = "Global\n"; //Global variable

function testscope(){
    $local = "Rabeya Sultana"; //local variable
    global $globalVar;
    echo $globalVar;
    echo $local;
}
testscope();


$greet = function (){   //benami function call kora(annonymus function)
    echo "Welcome to the new world!";
};
$greet();  


//arrow function


$add = fn( $n1,$n2 ) => $n1 + $n2;

echo $add(10,10); 
*/
//callback function*theme dev.laravel

function process($callback){
    return $callback("Rabeya!");
}
$result = process(function($name){
    return "Hello, $name!";
});

 echo $result;