<?php

    $date1=$_POST['date1'];
    $date2=$_POST['date2'];

    $d1=date_create($date1);
    $d2=date_create($date2);

    $diff=date_diff($d1,$d2);
    $diff_days=$diff->format("%R%a");
    echo $diff_days*250;

    

?>