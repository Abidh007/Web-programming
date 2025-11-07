<?php
echo"sorting array<br/>";
echo"=============<br/>";
$stud=array("Nichole","syan","adain","rils","chriz");
echo"Displaying array using print_r():";
print_r($stud);
echo"<br>Array in ascending order:<br/>";
asort($stud);
print_r($stud);
echo"<br>Array in decending order:<br/>";
asort($stud);
print_r($stud);
?>