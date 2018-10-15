<?php
declare (strict_types = 1);

require_once(__DIR__ . '/vendor/autoload.php');

use Rita\Projects\Strict_types;
use Rita\Projects\No_types;

$strictType = new Strict_types;
$noType = new No_types;

try {
    //need to pass int, return sum of digits
    echo $strictType->digitSum(1256) . "\n";  //14
    echo $noType->digitSum(1256) . "\n";    //14
    //echo $strictType->digitSum(1256.56) . "\n";  //Error: Argument 1 passed must be of the type integer, float given
    echo $noType->digitSum(1256.56) . "\n";    //14
    //echo $strictType->digitSum("12 Hello") . "\n"; //Error: Argument 1 passed must be of the type integer, string given
    //echo $noType->digitSum("12 Hello") . "\n"; //3 Notice: A non well formed numeric value encountered
    //echo $strictType->digitSum("15") . "\n"; // Error: Argument 1 passed must be of the type integer, string given
    echo $noType->digitSum("15") . "\n"; // 6

    // Factors of an integer
    $factors = $strictType->factors(12); // returns [1, 2, 3, 4, 6, 12]
    print_r($factors);
    $factors = $noType->factors(12); // returns [1, 2, 3, 4, 6, 12]
    print_r($factors);
    //$factors = $strictType->factors("12 Cars"); // Error: Argument 1 passed must be of the type integer, string given
    //print_r($factors);
    //$factors = $noType->factors("12 Cars"); // returns [1, 2, 3, 4, 6, 12]
    //print_r($factors); // [1, 2, 3, 4, 6, 12] PHP Notice:  A non well formed numeric value encountered

    echo $strictType->discriminant(8, 2, 3) . "\n"; //-92
    echo $noType->discriminant(8, 2, 3) . "\n"; //-92
    echo $strictType->discriminant(8.2, 2.5, 3.3) . "\n"; //-101.99
    echo $noType->discriminant(8.2, 2.5, 3.3) . "\n"; //-101.99
    //echo $strictType->discriminant("4 Four", "2 Two", "1 ONe") . "\n"; //Error: Argument 1 passed to must be of the type float, string given,
    //echo $noType->discriminant("4 Four", "2 Two", "1 ONe") . "\n"; // -12 PHP Notice:  A non well formed numeric value encountered


    echo $strictType->makecoffee()  . "\n"; //Making a cup of cappuccino.
    echo $strictType->makecoffee("espresso")  . "\n"; //Making a cup of espresso.
    //echo $strictType->makecoffee(null) . "\n"; // Error: Argument 1 passed must be of the type string, null given,
    //echo $strictType->makecoffee(5)  . "\n"; //Error: Argument 1 passed must be of the type string, integer given
    //echo $strictType->makecoffee(true)  . "\n"; //Error: Argument 1 passed must be of the type string, boolean given

    echo $noType->makecoffee()  . "\n"; //Making a cup of cappuccino.
    echo $noType->makecoffee("espresso")  . "\n"; //Making a cup of espresso.
    echo $noType->makecoffee(null) . "\n"; // Making a cup of .
    echo $noType->makecoffee(5)  . "\n"; //Making a cup of 5.
    echo $noType->makecoffee(true)  . "\n"; //Making a cup of 1.

    echo $strictType->sum(2, 3, 4) . "\n"; // 9
    //echo $strictType->sum(2, '3', 4.1) . "\n"; //Error: Argument 3 passed must be of the type integer, float given
    echo $noType->sum(2, '3', 4.1) . "\n"; // 9.1
    echo $noType->sum("vienas", 'Du', 'Keturi') . "\n"; // 0
    //echo $strictType->sum(null, null). "\n"; // Error: Argument 2 passed to must be of the type integer, null given
    echo $noType->sum(null, null). "\n"; // 0

} catch (Throwable $e) {
    echo 'Error: '.$e->getMessage()  . "\n";
}
