<?php
// $filename = "myfile.txt";
// $fp = fopen($filename,"r"); //open file in read mode 
// $contents = fread($fp,filesize($filename)); //read file
// echo "<pre>$contents</pre>"; // printing data file
// fclose($fp); //close file

// $file = fopen("myfile.txt","r") or die("Unable to open the file");
// echo fread($file,filesize("myfile.txt"));
// fclose($file);

// fgets() function is used to read single line from the file.
// $file = fopen("myfile.txt","r"); // open file in read mode.
// echo fgets($file);
// fclose($file);

// $file = fopen("myfile.txt","r");
// echo fgetc($file);
// // while (!feof($file)) {
// //     echo fgetc($file);
// // }
// fclose($file);

// $file = fopen("apple.txt","w"); // opens file in write-only mode
// fwrite($file,"Hello");
// fwrite($file,"Sanothimi");
// fwrite($file,"Bhaktapur");
// fclose($file);
// echo "Data inserted successfully.";

$file = fopen("apple.txt","a"); // opens file in append mode
fwrite($file,"Hello");
fwrite($file,"Sanothimi");
fwrite($file,"Bhaktapur");
fclose($file);
echo "Data inserted successfully.";


?>