<?php
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt-BR', 'pt-BR.uft-8', 'portuguese');


    //Pastas
    define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
    define('VIEWS_PATH', realpath(dirname(__FILE__) . '/../views'));
    define('CONTROLLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));

    //Arquivos
    require_once(realpath(dirname(__FILE__) . '/database.php'));
    require_once(realpath(dirname(__FILE__) . '/loader.php'));
    require_once(realpath(MODEL_PATH . '/Model.php'));
?>