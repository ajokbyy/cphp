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
</body>
</html>
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
?>