<?php

$length = $_POST['length'];
$Width = $_POST['width'];
$area = $length * $Width;

// echo "ความยาว เท่ากับ ".$length."<br>";
// echo "ความยาว เท่ากับ ".$Width."<br>";
// echo "พื้นที่สี่เหลี่ยมผืนผ้า เท่ากับ ".$area;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่สี่เหลี่ยมผืนผ้า</title>
</head>
<body>
    <br>
    <p style='color:red'>";
    <?php
     echo "ความยาว เท่ากับ ".$length."<br>";
     echo "ความยาว เท่ากับ ".$Width."<br>";
     echo "พื้นที่สี่เหลี่ยมผืนผ้า เท่ากับ ".$area;
    ?>
    </p>
</body>
</html>

