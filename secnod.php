<!-- more basic of array like array, if..else..else if, for loop, while loop, do while loop, foreach loop.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>second class</title>
</head>
<style>
.header{
    width: 50%;
    padding: 1em;
    color: rgb(124, 115, 115);
    background-color: aqua;
}
</style>
<body>
    
<div class="header">
    <h1>Ther is header of </h1>
    <h3>header</h3>

<?php

$age = 18;
if ($age>18){
    echo "You can go to party";
}

else if($age<18){
    echo "you can'not go to party";
}
else if($age =18){
    echo "you can also go to party";
}
else{
    echo "con't go to the party";
}





// array
echo "<br>";
echo "<br>";
echo "<br>";


$lang = array("python", "c++", "swift", "php");
echo $lang[1];
echo "<br>";
echo "<br>";
echo "<br>";
echo count($lang); 
// it going to count the array or other thinghs


echo "<br>";
echo "<br>";
echo "<br>";
// loops
$a = 5;
while ($a <= 10) {
    # code...
    echo "<br>";
    echo "the valu of a is :";
    echo $a;
    $a++;
}
echo "<br>";
echo "<br>";
echo "<br>";
// arrar element count
$b = 0;
while ($b < count($lang)) {
    echo "<br>";
    echo "the valu of lang is :";
    echo $lang[$b];
    $b++;
}

echo "<br>";
echo "<br>";
echo "<br>";
// do while loop
$i = 0;
do {
    echo $i;
    $i++;
    echo"<br>";
} while ($i <= 0);

echo "<br>";
echo "<br>";
echo "<br>";
//  for loop 
$i2;
for ($i2=0; $i2 < 6; $i2++) { 
    echo $i2;
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
// foreach loop  it helps in array mantinass
foreach ($lang  as $value) {
    echo "the valu of lang is :";
    echo $value;
    echo "<br>";
}

?>

</div>
</body>
</html>


