<?php

echo "Hello World!";
echo "<br>";
echo "HTML are good tool";
echo "<h3> This is a Heads </h3>";

$name = "Uiwaieres";
echo "This is my name $name";

echo "<br>";

$work = "Web Developer";
echo "I am a $work";

echo "<br>";

define("WORK", "Web Developing");
echo WORK;

echo "<br>";

//operators

$a = 5;
$b = 10;
$c = $a + $b;
echo "$c";

echo "<br>";

$a = 10;
$b = 5;
$c = $a * $b;
echo "$c";

echo "<br>";

$a = 11;
$b = 2;
$c = $a % $b;
echo "$c";

echo "<br>";

$a = 11;
$b = 2;
$c = $a ** $b;
echo "$c";

echo "<br>";

$a = 2;
$b = 2;
$c = $a == $b;
echo "$c";

echo "<br>";

$a = 2;
$b = "2";

var_dump($a);
var_dump($b);

$c = $a === $b;
echo "$c";

echo "<br>";

$a = 2;
$a++;
echo "$a";

echo "<br>";    

$a = 2;
$b = 4;
$c = $a < $b;
echo "$c";

echo "<br>";

//if else

$a = 10;
$b = 5;
if( $a > $b ){
    echo " $a is greater then $b ";
}else{
    echo " $a is smaller then $b ";
}

echo "<br>";

//switch

$a = 2;
switch( $a ){
    case 0: echo " This is a switch case no 0 ";
    break;

    case 1: echo " This is a switch case no 1 ";
    break;

    case 2: echo " This is a switch case no 2 ";
    break;

    case 3: echo " This is a switch case no 3 ";
    break;
}

echo "<br>";

//while
$a = 2;
while( $a < 10 ){
    echo " This is a while no $a <br> ";
    $a++;
}

echo "<br>";

//do while
$a = 2;
do{
    echo " This is a do while loop <br> ";
    $a++;
}while( $a < 10 );

echo "<br>";

//for
for( $a = 1; $a < 10; $a++ ){
    echo " This is a for loop no $a <br> ";
}

echo "<br>";

//strings
$a = " Welcome Everyone ";
echo "$a <br>";
echo strlen( $a );
echo "<br>";
echo str_word_count( $a );
echo "<br>";
echo strtolower( $a );
echo "<br>";
echo strtoupper( $a );

echo "<br>";

//function

function sum(){
    $a = 10;
    $b = 5;
    $c = $a + $b;
    echo "$c";
}

sum();
echo "<br>";

//arrays 

$team = array(" India ", " Austraila ", " Newzealand ");
echo " $team[2] ";

echo "<br>";

$team = array("Rankno1" => "India", "Austraila", "Newzealand");
echo " $team[Rankno1] ";

echo "<br>";

foreach( $team as $Topteam ){
    echo "$Topteam";
    echo "<br>";
}

?>