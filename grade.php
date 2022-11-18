<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<hr color="red">
<hr color="black">
<center>
<br><br><br><br><br><br><br><br><br><br><br><br>
 <font size = "10"> 
<?php

$grade = $_GET['grade'];

if($grade >= '90'){
    echo "ได้ A+";
}elseif($grade >= '80'){
    echo "ได้ A";
}elseif($grade >= '75'){
    echo "ได้ B+";
}elseif($grade >= '70'){
    echo "ได้ B";
}elseif($grade >= '65'){
    echo "ได้ C+";
}elseif($grade >= '60'){
    echo "ได้ C";
}elseif($grade >= '55'){
    echo "ได้ D+";
}elseif($grade >= '50'){
    echo "ได้ D";
}else{
    echo "ได้ F";
}
?>   
</font>
</center>
</body>
</html>