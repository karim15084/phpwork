<?php

$file1 fopen("pattani.txt","w");
fwrite($file1,"Kareemah Salaeh\n");
$file2 =fopen ("pattani.txt","r");
echo fread($file2, filesize("pattani.txt"));
fclose($file2);

echo "<br>";

$file2 = fopen("pattani.txt","w");
fwrite($file3, "Infomation Techlogy\n");
$file4 = fopen("pattani.txt","r");
echo fread($file4, filesize("pattani.txt"));
fclose($file4);


?>