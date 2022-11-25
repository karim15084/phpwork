<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="background-color: rgb(22, 197, 95);">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container" align="center">
 <h1 >    
      ผลลัพธ์ที่ได้<br><br>

<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    switch ($op) {
        case '+':
            function addNumber($num1,$num2){
                echo $num1 + $num2;
            }
            echo addNumber($num1,$num2);
            break;
        case '-':
            function minusNumber($num1,$num2){
                echo $num1 - $num2;
            }
            echo minusNumber($num1,$num2);
            break;
        case '*':
            function multipleNumber($num1,$num2){
                echo $num1 * $num2;
            }
            echo multipleNumber($num1,$num2);
            break;
        case '/':
            function divideNumber($num1,$num2){
                echo $num1 / $num2;
            }
            echo divideNumber($num1,$num2);
            break;        
        case '%':
            function number($num1,$num2){
                echo $num1 % $num2;       
            }
            echo number($num1,$num2);
            break;   
        default:
            function powerNumber($num1,$num2){
                echo $num1 ** $num2;               
            }
            echo powerNumber($num1,$num2);
            break;       
    }

?></h1>

</body>
</html>