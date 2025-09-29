<?php
    // Controller temporario
    loadModel('WorkingHours');

    $wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));
    [$t1, $t2, $t3, $t4] = $wh -> getTimes();

    print_r($wh);
?>