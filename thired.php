<!-- here we are going to learn about funtions -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>third class</title>
</head>
<style>
.{
    margin:0px;
}
.body_type{
    width: 80%;
    padding: 1rem;
    color: rgb(12, 11, 11);
    background-color: palevioletred;
    margin-left: 6rem;

}
</style>
<body>

<div class="body_type">
    <h1> lat's start coding</h1>
<?php
// funtion 
function print5(){
    echo "THIS IS A FUNTION IN PHP";
}
print5();
echo "<br>";
print5();
echo "<br>";
print5();
echo "<br>";

// parmetive funtion 

function print_number($number){
    echo "<br> Here we take number from out side the funtion :";
    echo $number;
}

print_number(21);

// a "." is string comminer in php it can connect two or more string
// string
echo "<br>";
echo "<br>"; 
echo "<br>"; 

$str = "THIS IS A STRING";

echo $str;
ECHO "<br>";
$len = strlen($str);
echo "we can find the length of the string by using strlen :". $len;
// echo $len;
// we can use "." fechere to connect or joint strings 
echo "<br>";
echo "we can find the length of the string by using strlen :". $len ." like this we can join str5ings";
echo "<br>";
// we have a funtion for counting words 
echo "we can find the word of a string using str_word_count funtion : ". str_word_count($str);
echo "<br>";
// there are many function php for doing different things like revers a string, count a spicific position, etc 
echo "we can revers the string using strrev funtion : ". strrev($str);
echo "<br>";
echo "we can find the word positon in a string : ". strpos($str, "IS");

echo "<br>";
// we can reples a word with diff word also 
echo "we can replace a word using str_replace: ". str_replace("IS", "AT", $str);
echo "<br>";

?>
</div>
</body>
</html>
