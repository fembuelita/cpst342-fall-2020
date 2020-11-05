<?php
$my_first_var = "hello world";
//$my_first_var = 'c';
//$my_first_var = true;

/*
 fdsfs
dfsdsfas
dfsadsafsa
sdafsfsa
 */


/**
 * @param $num1
 * @param $num2
 *
 * @return mixed
 */
//function add_two_numbers($num1, $num2) {
//    return $num1 + $num2;
//}
//
//echo add_two_numbers(5, 3);
//
//
//define("PI", 3.14059);
//
//echo $my_first_var;
//
//$x = 5;
//echo add_two_numbers($x, PI);

$str1 = "hello";
$str2 = " world";
$str3 = $str1 . $str2; // hello world
$str4 = "$str1 $str2"; // hello  world
$str5 = "{$str1}{$str2}"; // hello world
$str6 = 'hello world';
$str6 = '{$str1}{$str2}'; // {$str1}{$str2}

$str = "Hello world";
echo "Hello world";
echo $str;
//$myObj = new MyClassName();
//$str6 = "{$myObj->addTwoNumbers(4, 2)}";

if ( 3 > 5 && 4 > 17 ) {
    // execute something
} elseif( 2.5 > 5 ) {
    //
} else {
    // execute something else
}