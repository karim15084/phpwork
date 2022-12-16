<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$num4 = $_GET['num4'];
$num5 = $_GET['num5'];
$num6 = $_GET['num6'];
$num7 = $_GET['num7'];
$num8 = $_GET['num8'];
$num9 = $_GET['num9'];
$num10 = $_GET['num10'];
$num11 = $_GET['num11'];
$num12 = $_GET['num12'];
$pro = $_GET['pro'];


$number = array(
    'num1'=> $num1,
    'num2'=> $num2,
    'num3'=> $num3,
    'num4'=> $num4,
    'num5'=> $num5,
    'num6'=> $num6,
    'num7'=> $num7,
    'num8'=> $num8,
    'num9'=> $num9,
    'num10'=> $num10,
    'num11'=> $num11,
    'num12'=> $num12
);
echo "<table>";
switch ($pro) {
    case 'จำนวนข้อมูล':
        echo "<h1style=text-align:center; border: 2px'>จำนวนข้อมูล";
        echo count($number);
        echo "ชุด</h1>";
        break;
    
    default:
    foreach($number as $kstd => $vstd){
        echo "key($kstd)"."=>"."var($vstd)"."<br>";
     }
        break;
}
   

?>