<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toturials</title>
</head>
<body>
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}




.container{
    max-width: 80%;
    background-color:#555 ;
    margin :auto;
    padding :23px;

}

</style>



<div class="container">
<h1> learn php with me </h1>
  party all night here
<?php

$age =6;
if($age>18){
    echo " you go to the party";
}
else if($age==7){
    echo "you are 7 year old";

}

else if($age==6){
    echo "you are 6 year old";

}
else{
    echo "you can not go to party";
}

//Arrays in php
$language =array("python","C++","php","NodeJs");
//echo  count ($language);
//echo $language[0];

//Loops in php

$a= 0;
while ($a <=10){
    echo "<br> The value of a is: ";
    echo $a;
    $a++;
}

//Itreating arrays in php  using while loop

$a=0;
while ($a < count($language)){
    echo "<br> The value of language is: ";
    echo $language[$a];
    $a++;
}

// do while loop

$a=200;
do{ 
    echo "<br> The value of language is: ";
    echo $a;
    $a++;
}while($a < 10);



// For loop


for($a=0; $a < 10; $a++){
    echo "<br> The value a from loop is: ";
    echo $a;
    
}
// for each loop 
foreach($language as $value){
    echo "<br> the value for each loop is ";
    echo $value;
}

function print5(){
    echo  "FIVE";
}
print5();
print5();
print5();
print5();
print5();


function print_number($number){
    echo "<br> your number is ";
    echo $number;

}
print_number(45);
print_number(45);
print_number(45);
print_number(4.5);

?>








</div>
    
</body>
</html>