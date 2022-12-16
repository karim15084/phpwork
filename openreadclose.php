<?php

$filel = fopen('kareemah.txt','r') or die("ไม่พบไฟล์ที่ต้องการ");
echo fread($filel,filesize('kareemah.txt'));
fclose($filel);


?>