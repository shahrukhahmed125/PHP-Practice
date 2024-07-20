<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- get starting with php     -->
<!-- Writing my first php code -->

<?php
    // print in php uses 'echo' and 'print' keywords
    // every statement in the php must end with a semi-colon ';'
    // it also can run HTML tags inside the String

    // echo "<h1>Hello, World!</h1>";
    // echo "Hello, World!";

    // first varibale in php
    // it doesn't need to spaecify the data type of the variable
    /* variables in the php language always start with $ symbol and then for name php uses underscore _ or letter (a-z)*/ 
    // variables are case-sensitive in php means $VARIABLE is different from $variable
    // varibales can easily be wrttien in echo or print statement

    // $variable_name = "Shahrukh";
    // $variable_age = 23;

    // echo "<h2>My name is $variable_name and i am $variable_age years old</h2>";

    // Php data types are following:

        // 1 Scalar Type:

                        //boolen
                        //integer
                        //float
                        //string

        // 2 Compound Types:

                        //array
                        //object

        // 3 Special Types:

                        //resource
                        //NULL

    // integer example

    // $a = 10;
    // $b = 60;
    // $c = $a+$b;
    // echo "<h2>$a + $b = $c</h2>";
    // echo $a,'<br>';
    // echo $b,'<br>';

    // float example

    // $x = 3.96;
    // echo $x;

    //boolen example
        // true = 1 will show on the screen
        // false = 0 will not show on the screen

    // $x = true;
    // $y = false;
    // echo $x,"<br>";
    // echo $y;

    // String example

    // $a = "I am shahrukh";
    // $b = 'I am 23 years old';
    // echo $a;
    // echo '<br>';
    // echo $b;

    // PHP Math

    // pi function

    // echo pi();  

    // max and min fuction

    // echo min(0,150,30,20,-8,-200);
    // echo'<br>';
    // echo max(0,150,30,20,-8,-200);

    //abs php function 'always return the positive value'

    // echo abs(-6.2);

    // PHP sqrt function for squre root
    
    // echo sqrt(64);

    // php round function
    
    // echo round(0.64);
    // echo '<br>';
    // echo round(0.45);

    // php random number function

    // echo rand();
    // echo rand(10,100);

    // for creating a constant in PHP case-sensitive

    // define("name","Shahrukh");
    // echo name;
    
    // const name = 'hi';
    // echo name;
    
    // for creating a constant in PHP case-insenitive (is throwing error)

    // define("name","Shahrukh",true);
    // echo NAME;


    //constant array in php

    // define('name',['shahrukh','ali','shan']);
    // echo name[0];

    // const name = ['shahrukh','ali','shan'];
    // echo name[2];

    // global constant in PHP

    // define('name','Shahrukh');

    // function myTest()
    // {
    //     echo name;
    // }

    // myTest();

    // const name = 'Ali';

    // function myTest()
    // {
    //     echo name;
    // }

    // myTest();

    // PHP arthmatic operators

    // $x = 5;
    // $y = 6;

    // echo $x + $y,'<br>';
    // echo $x - $y,'<br>';
    // echo $x * $y,'<br>';
    // echo $x / $y,'<br>';
    // echo $x % $y,'<br>';
    // echo $x ** $y;

    //assignment operators

    // echo $x+=$y,'<br>';
    // echo $x-=$y,'<br>';
    // echo $x*=$y,'<br>';
    // echo $x/=$y,'<br>';
    // echo $x%=$y;


    //comparision operators in PHP

    // echo $x == $y,'<br>';  // equal
    // echo $x === $y,'<br>'; // identical
    // echo $x !== $y,'<br>'; // Not equal
    // echo $x <> $y,'<br>'; // Not identical
    // echo $x !== $y,'<br>'; //Greater Than
    // echo $x < $y,'<br>'; // Less than
    // echo $x > $y,'<br>'; // Greater than
    // echo $x <= $y,'<br>'; // Lesser or equal
    // echo $x >= $y,'<br>'; // Greater than or equal
    // echo $x <=> $y; // spaceship
    

    //++$x  //pre increment
    //$x++  //post increment
    //--$x  //pre decrement
    //$x--  //post decrement

    // logical operators

    // $x and $y // $x && $y
    // $x or $y  // $x || $y
    // $x xor $y
    // !$x  

    // concatination 
    // $x.$y

    // $x = 'Ali';
    // $y = 'Khan';

    // echo $x.' '.$y;

    // assigning concatination

    // $x .= $y;
    // echo $x;

    // array operators for using in array

    // $x + $y;   union
    // $x == $y;  equality
    // $x === $y; identity
    // $x != $y;  Inequality
    // $x <> $y;  Inequality
    // $x !== $y; Non-identity

    // php conditional assignment operator

    
    // if empty($user) = TRUE, set $status = 'bhai'
    // echo $status  = (empty($user)) ? 'bhai' : 'chal';
    // echo "<br>";

    // $user = 'Ali';
    
    // if empty($user) = FALSE, set $status = 'chal'  
    // echo $status  = (empty($user)) ? 'bhai' : 'chal';

    // variable $color is "red" if $color does not exist or is null

    // $color = 'yellow';
    // echo $color ?? 'red';

    // if statment

    // $t = date('H');
    
    // echo $t, '<br>';

    // if($t < '20')
    // {
    //     echo 'Have a good day!';
    // }

    // if and else statment


    // if($t < '20')
    // {
    //     echo 'have a good day!';
    // }
    // else
    // {
    //     echo 'have a good night';
    // }

    // if else and elseif statment 


    // if($t < '10')
    // {
    //     echo 'have a good morning';
    // }
    // elseif($t < '20')
    // {
    //     echo 'have a good day';
    // }
    // else
    // {
    //     echo 'have a good night';
    // }

    // php switch case

    // $fav_color = 'black';

    // switch ($fav_color)
    // {
    //     case 'red':
    //         echo 'Your favorite color is red!';
    //         break;
    //     case 'blue':
    //         echo 'Your favorite color is blue!';
    //         break;
    //     case 'green':
    //         echo 'Your favorite color is green!';
    //         break;
    //     default:
    //         echo 'Your favorite color is niether red, blue, nor green';

    // }
    
    // PHP Loops

    // while loop 

    // $x = 1;

    // while($x <= 5)
    // {
    //     echo "The number is: $x <br>";
    //     $x++;
    // }

    // $x = 0;
    // while($x <= 100)
    // {
    //     echo "The number is: $x <br>";
    //     $x+=10;
    // }


    // printing table with while loop

    $y = 2;  // the table number
    $x = 1;

    // while($x <= 10)
    // {
    //     echo "$y x $x = ",$y*$x;
    //     echo"<br>";
    //     $x++;
    // }

    //do while Loop php

    // $x = 1;

    // do
    // {
    //     echo "The number is: $x <br>";
    //     $x++;
    // }
    // while($x <= 5);


    //the do...while loop will execute its statements at least once, even if the condition is false

    // printing table with do while loop
    // $x = 6;

    // do
    // {
    //     echo "$y x $x = ",$y*$x;
    //     echo "<br>";
    //     $x++;
    // }
    // while($x <= 10);


    // for loop php


    // for($x = 1; $x <= 10; $x++)
    // {
    //     echo "The number is: $x <br>";
    // }

    // for($x = 0; $x <= 100; $x += 10)
    // {
    //     echo " the number is $x <br>";
    // }

    // printing table with for loop

    // $x = 2;

    // for($i = 1; $i <= 10; $i++)
    // {
    //     echo "<h1>$x x $i = ",$x*$i,"</h1>";
    //     echo "<br>";
    // }

    // Forecah loop in php

    //For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

    // $colors = array("red","blue","black");

    // foreach($colors as $x)
    // {
    //     echo "$x <br>";
    // }

    // $countries = array("Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe");

    // foreach($countries as $x)
    // {
    //     echo "$x <br>";
    // }

    // The following example will output both the keys and the values of the given array ($age):

    // $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    // foreach($age as $x => $val)
    // {
    //     echo"$x = $val <br>";
    // }


    // Break in while loop

    // $x = 0;

    // while ($x < 10)
    // {
    //     if($x == 4)
    //     {
    //         break;
    //     }
    //     echo "The number is: $x <br>";
    //     $x++;
    // }


    // Continue in while loop

    // $x = 0;

    // while($x < 10)
    // {
    //     if($x == 4 )
    //     {
    //         $x++;
    //         continue;
    //     }
    //     echo "The number is: $x <br>";
    //     $x++;
    // }


    // Break in for loop

    // for($x=0;$x<10;$x++)
    // {
    //     if($x == 4)
    //     {
    //         break;
    //     }
    //     echo "the number is: $x <br>";
    // }

    // continue in for loop

    // for($x=0;$x<10;$x++)
    // {
    //     if($x == 4)
    //     {
    //         continue;
    //     }

    //     echo "The number is: $x <br>";
    // }


    // php functions 

    // function writeMsg()
    // {
    //     echo "Hello World";
    // }
    // writeMsg();

    // function table_print(int $table_number,int $table_range)
    // {
    //     for($i=1; $i<=$table_range;$i++)
    //     {
    //         echo "$table_number x $i = ",$table_number*$i;
    //         echo"<br>";
    //     }
    // }
    // table_print(2,100);

    // function area_of_circle(float $radius)
    // {
    //     $pi = 3.14159;
    //     $area = $pi*$radius**2;
        
    //     echo "The Area of the Circle is: $area sq";
    // }

    // area_of_circle(5);

    //To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

    // Php Array

    // $cars = array("Volvo","BMW","Toyota");

    // echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2].". <br>";
    // echo count($cars);

    // loop throw array

    // $cars = array("Volvo","BMW","Toyota");
    // $arrlength = count($cars);

    // for($x=0; $x < $arrlength; $x++)
    // {
    //     echo $cars[$x];
    //     echo"<br>";
    // }

    // PHP Associative Arrays

    // it has keys that assign a value

    // $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    // echo "Peter is ".$age['Peter']." years old";


    // Loop Through an Associative Array


    // $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    // foreach($age as $x=>$x_value)
    // {
    //     echo "Key = ".$x." Value = ".$x_value;
    //     echo"<br>";
    // }

    // PHP - Multidimensional Arrays
    // A multidimensional array is an array containing one or more arrays.

    // two dimensional array

    // $cars = array(

    //     array("Volvo",22,18),
    //     array("BMW",15,13),
    //     array("Saab",5,2),
    //     array("Land Rover",17,15)

    // );

    // echo $cars[0][0].": In stocks: ".$cars[0][1].", solid: ".$cars[0][2].".<br>";
    // echo $cars[1][0].": In stocks: ".$cars[1][1].", solid: ".$cars[1][2].".<br>";
    // echo $cars[2][0].": In stocks: ".$cars[2][1].", solid: ".$cars[2][2].".<br>";
    // echo $cars[3][0].": In stocks: ".$cars[3][1].", solid: ".$cars[3][2].".<br>";


    // for($row=0;$row<4;$row++)
    // {
    //     echo "<p><b>Row number $row</b></p>";
    //     echo"<ul>";

    //     for($col=0;$col<3;$col++)
    //     {
    //         echo "<li>".$cars[$row][$col]."</li>";
    //     }

    //     echo"</ul>";
    // }

    // PHP - Sort Functions For Arrays

    // sort() - sort arrays in ascending order
    // rsort() - sort arrays in descending order
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key

    // $cars = array("Volvo","BMW","Toyota");

    // sort($cars);
    // $crlen = count($cars);

    // for($x=0;$x<$crlen;$x++)
    // {
    //     echo $cars[$x]."<br>";
    // }

    // $no = array(4,6,2,22,11);

    // sort($no);
    // $no_len = count($no);

    // for($x=0;$x<$no_len;$x++)
    // {
    //     echo $no[$x]."<br>";
    // }

    // $no = array(4,6,2,22,11);

    // rsort($no);
    // $no_len = count($no);

    // for($x=0;$x<$no_len;$x++)
    // {
    //     echo $no[$x]."<br>";
    // }


    // echo "The scope of global and local variables in php<br>";

    // $a = 98; // global variable

    // function printValue()
    // {
    //     global $a;  // calling the global variable
    //     $a = 1000; // you can the globale variable inside the function
    //     // $a = 2; // local variable
    //     echo"the variable is $a <br>";
    // }

    // echo $a;
    // printValue();

    // print(var_dump($GLOBALS)); // all the global variables are store in $GLOBALS  
    // print($GLOBALS["a"]); // thats how you print an single variable from the $GLOBALS variable



    /// PHP forms

    // echo "Get and post in php";




















?>
</body>
</html>
