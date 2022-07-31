<!-- basic of php like data types veriable, object, define -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php page</title>
</head>
<body>
    <h1>i don't konw</h1>

<?php
echo "Hello World <br>";
echo "Hello World <br>";
/* multiuline 

commount*/
// variable

$car = 22;
$bick = 22;
$total = $car + $bick;
echo $total;
// or 
echo "<br>";
echo $car + $bick;

echo "<br>";
$i = 4;
echo "The valu of $i==4 is";
echo var_dump(4==$i);

echo "<br>";
// $i = 4;
echo "The valu of 1!=4 is";
echo var_dump(4!=1);

$van = 2;
echo "<br>";
echo $van++;
echo "<br>";
echo $van++;

// echo $van--;
// echo ++$van;
// echo --$van;


// logical operater
echo "<br>";
$myvan = (false or false);
echo var_dump($myvan);


echo "<br>";
$myvan = (true xor true);
echo var_dump($myvan);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// <!-- second class  -->
// <!-- object - tells what "type of data is taht" -->
// any typedata - float, bool, etc

$truck = "this is the best we can do";
echo var_dump($truck);
echo "<br>";
$truck = 22;
echo var_dump($truck);

echo "<br>";
echo "<br>";
echo "<br>";

// constant
define('PI', 55.14);

ECHO PI;

// $PI = 3.24;
// ECHO PI;
// we cannot change it 

echo "<br>";
echo "<br>";
echo "<br>";




?>

</body>
</html>