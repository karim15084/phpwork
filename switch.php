<?php

   /* $today = date('D');

    switch ($today) {
        case 'Fri':
            echo "วันนี้ วันศุกร์";
            echo "<style>
                    body{
                        background-color: skyblue;
                    }
                    </style>;"
            break;
        case 'Sat':
            echo "วันนี้ วันเสาร์";
            break;
        case 'Sun':
            echo "วันนี้ วันอาทิตย์";
            break;
        case 'Mon':
            echo "วันนี้ วันจันทร์";
            break;    
        case 'Tue':
            echo "วันนี้ วันอังคาร";
            break;
        case 'Wed':
            echo "วันนี้ วันพุธ";
            break;
        
        default:
            echo "วันนี้ วันพฤหัสบดี"
            break;
    }

   echo "<hr color='red'>";*/

    $month = date('M');

    switch ($month) {
        case 'Nov':
            echo "เดือนนี้ได้พฤศจิกายน";
            break;
        case 'Dec':
            echo "เดือนนี้ได้ธันวาคม";
            break;
        case 'Jan':
            echo "เดือนนี้ได้มกราคม";
            break;
        case 'Feb':
            echo "เดือนนี้ได้กุมภาพันธ์";
            break;    
        case 'Mar':
            echo "เดือนนี้ได้มีนาคม";
            break;
        case 'Apr':
            echo "เดือนนี้ได้เมษายน";
            break;
        case 'May':
            echo "เดือนนี้ได้พฤษภาคม";
            break;
        case 'Jun':
            echo "เดือนนี้ได้มิถุนายน";
            break;
        case 'Jul':
            echo "เดือนนี้ได้กรกฎาคม";
            break;
        case 'Aug':
            echo "เดือนนี้ได้สิงหาคม";
            break;
        case 'Sept':
            echo "เดือนนี้ได้กันยายน";
            break;                      
        
        default:
            echo "เดือนนี้ได้ตุลาคม";
            break;
    }

?>