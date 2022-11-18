<?php

    $diagonal = $_POST['diagonal'];
    $branch1 = $_POST['branch1'];
    $branch2 = $_POST['branch2'];
    $area = 1/2 * $diagonal * $branch1 * $branch2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่สี่เหลี่ยมด้านไม่เท่า</title>
</head>
<body>
    <br>
    <p style='color:red'>
    <?php
        echo "เส้นทแยงมุม เท่ากับ ".$diagonal."<br>";
        ?>
        </p>
        <p style='color:blue'>
    <?php
        echo "เส้นกิ่ง เท่ากับ ".$branch1."<br>";
        echo "เส้นกิ่ง เท่ากับ ".$branch2."<br>";
        ?>
        </p>
        <?php
        echo "พื้นที่แปดเหลี่ยม เท่ากับ ".$area;
    ?>
</body>
</html>