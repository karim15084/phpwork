<?php

   function displayName(){
    echo "Karimah Salaeh";
   }
   echo "My Name is ";
   displayName();

   echo "<hr color='red'>";

   function addNumber(){
   echo $num1 + $num2;
   }
   addNumber(2,4);

   echo "<hr color='green'>";
   
   function displayStudend($name){
    echo $name;
   }
   displayStudend("Karim");

   function powerNumber($num,$pow){
    echo $num ** $pow;
    }
    powerNumber(10,5);

    echo "<hr color='blue'>";

    function fractionNumber($numerate,$denomerate){
        echo $numerate % $denomerate;
        }
        fractionNumber(17,2);
    
        echo "<hr color='yellow'>";




?>