<?php
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    require_once(CONTROLLLER_PATH . '/login.php');

    loadView('login', ['texto' => 'abc123']);
?>