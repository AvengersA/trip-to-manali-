<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <div class="container">
   this is my website

<?php
  define('pi',3.14);

   echo "hello world printed using php";
   //secert alogrithm


/*This 
  is
  a
  multiline
  comment
   */
  $variables1 =5;
  $variables2 =2;
  echo $variables1;
  echo $variables2;

  echo $variables1 + $variables2;

  //operator in php
  //Arthmetic operator

  echo "<br>";
  echo "The value of variables1 + variables2 is";
  echo $variables1 + $variables2;
  echo "<br>";

  echo "The value of variables1 - variables2 is";
  echo $variables1 - $variables2;
  echo "<br>";

  echo "The value of variables1 * variables2 is";
  echo $variables1 * $variables2;
  echo "<br>";

  echo "The value of variables1 / variables2 is";
  echo $variables1 / $variables2;
  echo "<br>";


  //Assignment operators

  $newVar =$variables1;
  //$newVar +=1;
  //$newVar -= 1;
 // $newVar *= 1;
  $newVar /=2;

  echo "the value of new variables is";
  echo $newVar;
  echo "<br>";


  //comparsion operators

  
  echo "the value  of  1==4 is";
  echo var_dump(1==4);
  echo "<br>";

  
  echo "the value  of  1!=4 is";
  echo var_dump(1 !=4);
  echo "<br>";

  
  echo "the value  of  1>=4 is";
  echo var_dump(1>=4);
  echo "<br>";

 
  echo "the value  of  1<=4 is";
  echo var_dump(1<=4);
  echo "<br>";

  //increment/ Decerement Operators

  //echo $variables1++;
  //echo "<br>";
  //echo $variables1;

  //echo $variables1--;
  //echo "<br>";
   //echo $variables1;


  // ++$variables1;
  //echo "<br>";
  //echo $variables1;


  //echo --$variables1;
  //echo "<br>";
  //echo $variables1;

  //logical operator

  //and(&&)
 // or(||)
 // xor
 // not (!)

  //$myvar =(true and true);
  //$myvar =(false and true);
  //$myvar =(false and false);
  $myvar =(true and false);

  echo "<br>";
  echo var_dump($myvar);









?>

<?php

   //Data types in php

//    1.String
//    2.Integer
//    3.Float
//    4.boolean
//    5.Array
//    6.object
// 
   echo "<br>Data types <br>";
   $var ="this is  a string";
   echo var_dump($var);


   echo"<br>";

   $var =67;
   echo var_dump($var);
    echo "<br>";


    $var =6.7;
   echo var_dump($var);
    echo "<br>";

    $var =true;
   echo var_dump($var);
    echo "<br>";
  echo pi;
    


 

   




?>

   </div>
</body>
</html>