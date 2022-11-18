<?php

$prefix = $_GET['prefix'];

// if($prefix == 'นาง'){
//    echo "ผู้หญิง";
// }elseif($prefix == 'นางสาว'){
//    echo "ผู้หญิง";
// }elseif($prefix == 'เด็กหญิง'){
//    echo "ผู้หญิง";
// }elseif($prefix == 'นาย'){
//    echo "ผู้ชาย";
// }else{
//    echo "ผู้ชาย";
// }  
  
switch ($prefix) {
    case 'นาง' :
        echo "ผู้หญิง";
        break;
        case 'นางสาว' :
        echo "ผู้หญิง";
        break;
        case 'เด็กหญิง' :
        echo "ผู้หญิง";
        break;
        case 'นาย' :
        echo "ผู้ชาย";
        break;
        
        default:
        echo "ผู้ชาย";

}

?>