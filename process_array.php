<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
$num5 = $_POST['num5'];
$num6 = $_POST['num6'];
$pro = $_POST['pro'];

$number = array(
$num1,
$num2,
$num3,
$num4,
$num5,
$num6

);
echo "<table>";
switch ($pro) {
    case 'หาจำนวนอาเรย์':
        echo "<h1 style='text-align: center; border: 2px dashed green;";
        echo "color: green'>จำนวนข้อมูล ";
        echo count($number);
        echo " ชุด</h1>";
        break;
    
    default:
    foreach($numberb as $nm){
        echo "<tr><td style='border: 1px dotted red'>";
        echo $nm;
        echo "</tr></td>";
    }
    break;

}

?>