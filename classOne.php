<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size:40 px;margin-left:80px;">
    <?php
    echo "Hi, Future Developers! <br>";
    //variable
    $name = "Rabeya Sultana<br>";
    echo$name;
    //Best Practice
    // $my_name(snakeCase-variable/function)
    // $myName(camelCase-method)
    // $MyName(pascalCase-class)
    $name = "Rabeya<br>";
    echo$name;
    //constant
    define("PI", 3.1416);
    echo"PI<br>";

    /*Data Types

       Scalar Types
          Integer
          Float/Double
          String
          Boolean
       Compound Types
          Array
          Object
       spacial Types
          Null
          Resource

    */
    $age = 25;
    $price = 40.43;
    $myName = "Rabeya Sultana";
    $is_admin = false;

    $fruits = ["Mango", "Banana", 27];
    echo "$fruits[0]<br>";
    // $user1 = new User();

    // $variable = Null;
    // $file = fopen("test.txt", "r");

    //Arithmetic Operators
    $a = 15;
    $b = 4;
    $addition = $a + $b;
    $subtraction = $a - $b;
    $multiplition = $a * $b;
    $division = $a / $b;
    $modulus = $a % $b;
    $exponentiation= $a ** $b;

    echo "$addition<br>";
    echo "$subtraction<br>";
    echo "$multiplition<br>";
    echo "$division <br>";
    echo "$modulus<br>";
    echo "$exponentiation<br>";
    //Assignment Operators

    $a += 2;    //$a = $a + 2;
    echo "$a<br>";
    $a -= 2;    //$a = $a - 2;
    echo "$a<br>";
    $a *= 2;    //$a = $a * 2;
    echo "$a<br>";
    $a /= 2;    //$a = $a / 2;
    echo "$a<br>";
    $a %= 2;    //$a = $a % 2;
    echo "$a<br>";
   
?>

</body>
</html>