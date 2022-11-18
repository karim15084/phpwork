<?php

$numply = $_GET['num'];

echo "สูตรคูณแม่ $numply<br>";
for($num = 1; $num <= 12; $num++){
    echo $numply." x ".$num." = ".($numply * $num);
    echo "<br>";
    echo "<meta http-equiv='refresh' content='5; url=multiply.html'>";
}
?>