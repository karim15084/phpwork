<?php

    include "config.php";

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $com_sql = "SELECT * FROM account WHERE user_acc = $user AND pass_acc =  $pass";
    $com_query = mysqli_query($conn,$com_sql);
    $com_result = mysqli_fetch_array($com_query);


    if(!$com_result){
        echo "ไม่สามารถ Sign-in ได้ เนื่องจาก ID student หรือ Password ไม่ถูกต้อง";
        header("refresh: 2; url=login.html");
    }else{
        echo "ยินดีต้อนรับ เข้าระบบ Student System";
        header("refresh: 2; url=home.php");
    }
   mysqli_close($conn);
?>
Safika
Safika Ha
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Login System</h2>
    <form action="process_login.php" method="post">
    <table>
        <tr>
            <th>Id Student</th>
            <td>
                <input type="text" name="username">
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Sigin">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>