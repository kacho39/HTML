<?php

echo "This is a note for a person who have learnt Java, HTML and JavaScript\n";
echo "Things repeated is excluded\n";


// single-line comment
# single-line comment

/*
multiple-lines 
comment block
*/

echo "Hello World!". "Alvin here"; // can use echo or print

  // variable
$txt = "Hello world!";
global $x, $y;	//	globalise it
$x = 5;
echo $x;	//	print out the variable
echo "<br>";	//	newline
var_dump($x);  //	return the data type and value

 /*   static keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. So static is used. 
*/
// static $x = 0;


	//	Array
$fruit = array("apple", "orange", "banana");
var_dump($fruit);	//	output:		array(3) { [0]=> string(5) "apple" [1]=> string(6) "orange" [2]=> string(6) "banana" } 
echo count($fruit);

// Associative array
// two way
// 1)
$age = array("Tom"=>"35", "Jerry"=>"20");
// 2)
$age['Tom'] = "35";
$age['Jerry'] = "20";
echo "Tom is " . $age['Tom'] . "years old.";


	//	Object
class Car {
	function Car() {
		$this->modelName = "VW";
		$this->price = 100;
	}
}
//create an object
$herbie = new Car();
//show object properties
echo $herbie->modelName;	//	output VM
$herbie->price = 111;	//	add by 11
echo $herbie->price;
//other example
echo "\n";
$d1 = new Demo;
echo $d1->do_something()."\n";
$d2 = new Demo;
$d2->a = 44;
$d2->b = 55;
echo $d2->do_something()."\n";
echo "\n";
 
class Demo {
    public $a = 22;
    public $b = 33;
     
    function do_something() {
        return $this->a + $this->b;
    }
}

	//	String
// get length
echo strlen("Hello world!"); // outputs 12
// count word
echo str_word_count("Hello world!"); //outputs 2
// reverse
echo strrev("Hello world!"); //outputs !dlrow olleH
// search text position
echo strpos("Hello world!", "world"); //outputs 6
// replace text into a string
echo str_replace("world", "Dolly", "Hello world!"); //outputs Hello Dolly!

//href: https://www.w3schools.com/php/php_ref_string.asp


	//	Constant
// Using define function
// define(name, value, case-insensitive)
// global automatically

//case-sensitive
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//case-insensitive
define("GREETING", "Welcome to W3SSchools.com!", true);
echo greeting;


	//	operators
$x == $y; // equal    true if $x is equal to $y
$x === $y; // identical   true if $x is equal to $y and they are of the same type
$x !== $y; // not identical

//logical operator
$x and $y; // true if both $x and $y are true  // and,&& 都得
$x or $y; // true if either $x or $y is true  // or,|| 都得
$x xor $y; // true if either $x or $y is true but not both

//string operator
$txt1 .= $txt2; // append $txt2 to $txt1


  // foreach loop
//  foreach ($array as $value) {
//     code to be executed;
//  }
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) {	//	mean value in colors
    echo "$value <br>";
}

	//	switch
echo "\n";
switch (3) {	//	無break會之後全部echo
    case 3:
         echo "選擇是3...";
         break;
          
    case 4:
         echo "選擇是4...";
         break;
     
    case 5:
         echo "選擇是3...";
         break;
          
    case 6:
         echo "選擇是6..."; 
         break;
     
    default:
         echo "以上沒有符合的條件 :(";
}
echo "\n\n";

	//	sorting array
sort($color); // ascending order
rsort($color); // descending order
// for associative array
asort($age); // ascending according to value
ksort($age); // ascending according to key
arsort($age); // descending according to value
krsort($age); //descending according to key


	//	function
echo "\n";
echo big(33, 22)." is bigger!\n";
echo big("John", "Mary")." is bigger!\n";	//	Mary is bigger
echo "\n";

function big($a, $b) {
    if ($a > $b) {
        return $a;
    }
    else {
        return $b;
    }
}

 // Superglobals
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

?>