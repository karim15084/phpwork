<?php

    $name = array(
        "Kareemah",
        "Fadeelah",
        "Nureeda",
        "Suraya"
    );

    echo "<h2>Indexed Array</h2>";
    echo "จำนวนข้อมูล ".count($name)." ชุด<br>";
    echo "ข้อมูล Index 2 = ".$name[2];
    $num = 0;
   // while($num < count($name)){
   //    echo 'ข้อมูล = '.$name[$num]. "<br>";  
   //   $num++
   // }
   
   echo "<hr color='red'>";
   echo "<p>การใช้ for ดึงข้อมูล</p>";
   for ($num = 0;$num < count($name);$num++){
       echo 'ข้อมูล = '.$name[$num]."<br>";
   }


   echo "<hr color='red'>";
   echo "<p>การใช้ foreach ดึงข้อมูล</p>";
   foreach($name as $nm){
     echo $nm."<br>";
   }

   
   echo "<hr color='green'>";
   echo "<hr color='green'>";

   $students = array(
    "Kareemah" => "3.33", //key => value
    "Fadeelah" => "2.22",
    "Nureeda" => "1.11",
    "Suraya" => "0.00"
);

echo "<h2>Associative Array</h2>";
echo "จำนวนข้อมูล ".count($students)." ชุด<br>";
echo "ข้อมูล Key[Teera] = ".$students['Teera']."<br>";
echo "ข้อมูล Key[Peera] = ".$students['Peera']."<br>";

echo "<hr color='red'>";
echo "<p>การใช้ foreach ดึงข้อมูล</p>";
foreach($students as $kstd => $vstd){
    echo "Key($kstd) : ".$vstd. "<br>";
}


echo "<hr color='green'>";
echo "<hr color='green'>";

$subjects = array(
    array("HTML","1-4-3","Teera Binkasem"),
    array("Database HTML","1-2-2","Samroh Baka"),
    array("Basic Java","2-2-2","Fadeelah Demae"),
    array("Basic Network","2-3-3","Imron Sulong"),
    array("Basic Javascript","0-4-2","Hawanee Doloh")
);

echo "<h2>Multidimensional Array</h2>";
echo "จำนวนข้อมูล ".count($subjects)." ชุด<br>";
echo $subjects[2][2]."<br>";

echo "<hr color='red'>";
   echo "<p>การใช้ for ดึงข้อมูล</p>";
   for($r = 0;$r < count($subjects); $r++){
    for($c = 0;$c < 3; $c++){
        echo $subjects[$r][$c]."<br>";
    }
    echo "<hr>";
   } 

   
   

?>
