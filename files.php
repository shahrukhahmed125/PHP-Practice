<?php

//-------------file read in php---------------//


// $a = readfile("myFile.txt");
// echo $a;

// readfile("myFile.txt"); 

// opening file in php

// $fptr = fopen("myFile.txt", "r");
// // echo $fptr; 
// // echo var_dump($fptr);

// if(!$fptr)
// {
//     die("Unable to open the file. Please enter a valid filename"); // if you enter the worng filename
// }
// else
// {
//     echo "<b> The file is opened </b><br>";
// }

// $content = fread($fptr, 5); // fread is used to read the content in the file 

// $content = fread($fptr, filesize("myFile.txt"));  // filesize function is used for adding the complete file size in the fread function.
// echo $content;

// echo fgets($fptr); // get only single line from the file 
// echo fgets($fptr);

/*
while( $a = fgets($fptr)) 
{
    echo $a;
}
echo "End of file is here";
*/


// while( $a = fgetc($fptr))  // get the file character by character
// {
//     echo $a;
//     // break;
// }
// echo "<b>End of file is here</b>";

// // echo fgetc($fptr);

// Write a program which reads the content of a file until has been encountered.

// while($a = fgetc($fptr))
// {
//     echo $a;
//     if($a == "f")
//     {
//         break;
//     }
// }



// fclose($fptr); // for closing the file we opened.



//-------------file write in php---------------//

// echo "Welcome to write file in php";
// $fptr = fopen("myfile1.txt", "w");
// fwrite($fptr, "This is the best file on this planet. Please don't argue with me on this one.\n");
// fwrite($fptr, "This is another content.\n");
// fwrite($fptr, "This is another content.\n");
// fwrite($fptr, "This is another content.\n");
// fwrite($fptr, "This is another content.\n");

// fclose($fptr);


//-------------Appending a file in php---------------//

// $fptr = fopen("myfile1.txt", "a");
// fwrite($fptr, "This is being appended in the file.\n"); // it will add the content in the file from the end.
// fclose($fptr);



?>