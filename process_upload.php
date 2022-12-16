<?php

    $folder_upload = "photo/";
    $file_upload = $folder_upload.basename($_FILES["photo"]["name"]);
    $uploadOK = 1;
    $file_ext = strtolower(pathinfo($file_upload,PATHINFO_EXTENSION));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background: linear-gradient(140deg,#00F5FF, #4169E1, #00BFFF );
    }
    .container{
        background: linear-gradient(40deg, #20B2AA, #7CFC00);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 400px;
        border-radius: 40px;
        border: 3px solid #B22222;
    }

    .center{
        text-align: center;
        font-size: 130%;

    }
</style>
<body>
    <div class="container">
        <div class="center"><br><br><br><br><br><br><br>
<?php
    if(isset($_POST["submit"])){
        $check_upload = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check_upload !== false){
            echo "ไฟล์ที่ส่งมาเป็นภาพ - ".$check_upload["mime"].".";
            $uploadOK = 1;
        }else{
            echo "ไฟล์ที่ส่งมาไม่ใช่ภาพ";
            $uploadOk = 0;
        }
    }

    if (file_exists($file_upload)){
        echo "ไม่สามารถส่งไฟล์ซ้ำได้";
        $uploadOK = 0;
    }

    if($_FILES["photo"]["size"] > 5242880) {
        echo "ไฟล์ขนาดเกิน 5 MB ได้";
        $uploadOk = 0;
    }

    if($file_ext != "jpg" && $file_ext != "png" && $file_ext != "gif" ) {
        echo "ส่งได้เฉพาะไฟล์ JPG, PNG, GIF เท่านั้น";
        $uploadOk = 0;
    }

    if($uploadOK == 0){
        echo "<br>ไม่สามารถส่งไฟล์ได้";
    }else{
        if(move_uploaded_file($_FILES["photo"]["tmp_name"],$file_upload)){
            echo "คุณส่งไฟล์ ".htmlspecialchars($_FILES["photo"]["name"])." เรียบร้อยแล้ว";
        }else{
            echo "<br>เกิดปัญหาในการส่งไฟล์";
        }
    }


?>
</div>
</div>
</body>
</html>