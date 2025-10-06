<?php
    session_start();
    requireValidSession();


    $user = $SESSION['user'];
    $userWorkingHours = WorkingHours::loadFromUserAndDate($user->, date('Y-m-d'));

    try {
        $currentTime = strftime('%H:%M:%S', time());

        if($_POST['forcedTime']) {
            $currentTime = $_POST['forcedTime'];
        }

        $records->innout($currentTime);
        addSuccessMsg('Ponto inserido com sucesso!');
    } catch (AppException $e) {
        addSuccessMsg($e->getMessage());
    }
    header('Location: day_records.php');
?>