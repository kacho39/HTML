<?php
echo "This is a note for a person who have learnt Java, HTML and JavaScript"
echo "Things repeated is excluded"
?>

<?php
// single-line comment

# single-line comment

/*
multiple-lines 
comment block
*/
?>
<?php
echo "Hello World!". "Alvin here"; // can use echo or print
?>

<?php  // variable
$txt = "Hello world!";
global $x, $y; // globalise it
$x = 5;
echo $x;   //print out the variable
echo <br>;
echo $y;
var_dump($x);  //return the data type and value
?>

<?php /*   static keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. So static is used. 
*/
// static $x = 0;
?>

<?php  // Array
$fruit = array("apple", "orange", "banana");
var_dump($x);
echo count($fruit);

// Associative array
// two way
// 1)
$age = array("Tom"=>"35", "Jerry"=>"20");
// 2)
$age['Tom'] = "35";
$age['Jerry'] = "20";
echo "Tom is " . $age['Tom'] . "years old."
?>

<?php  // Object
class Car {
	function Car() {
		$this->model = "VW"
	}
}
//create an object
$herbie = new Car();

//show object properties
echo $herbie->model;
?>

<?php  // String
// get length
echo strlen("Hello world!"); // outputs 12
// count word
echo str_word_count("Hello world!"); //outputs 2
// reverse
echo strrev("Hello world!"); //outputs !dlrow olleH
// search text position
echo strpos("Hello world!", "world"); //outputs 6
// replace text into a string
echo str_replace("world", "Dolly", "Hello world!") //outputs Hello Dolly!

//href: https://www.w3schools.com/php/php_ref_string.asp
?>

<?php  // Constant
// Using define function
// define(name, value, case-insensitive)
// global automatically

//case-sensitive
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//case-insensitive
define("GREETING", "Welcome to W3SSchools.com!", true);
echo greeting;
?>

<?php  //operators
$x == $y // equal    true if $x is equal to $y
$x === $y // identical   true if $x is equal to $y and they are of the same type
$x !== $y // not identical

//logical operator
$x and $y // true if both $x and $y are true  // and,&& 都得
$x or $y // true if either $x or $y is true  // or,|| 都得
$x xor $y // true if either $x or $y is true but not both

//string operator
$txt1 .= $txt2 // append $txt2 to $txt1
?>

<?php  // foreach loop
//  foreach ($array as $value) {
//     code to be executed;
//  }
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

<?php // sorting array
sort($color); // ascending order
rsort($color); // descending order
// for associative array
asort($age); // ascending according to value
ksort($age); // ascending according to key
arsort($age); // descending according to value
krsort($age); //descending according to key
?>

<?php // Superglobals
/*
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
// see https://www.w3schools.com/php/php_superglobals.asp