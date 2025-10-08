<?php
    session_start();
    requireValidSession();

    $activeUserCount = User::getActiveUsersCount();
    $absentUsers = WorkingHours::getAbsentUsers();
    $yearAndMonth = (new DateTime())->format('Y-m');
    $seconds = WorkingHours::getWorkedTimeInMonth($yearAndMonth);
    $hoursInMonth = explode(':', getTimeStringFromSeconds($seconds)) [0];

    loadTemplateView('manager_report', [
        'activeUsersCount' => $activeUserCount,
        'absentUsers' => $absentUsers,
        'hoursInMonth' => $hoursInMonth
    ]);
?>