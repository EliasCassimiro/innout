<?php
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

    //Pastas
    define('MODEL_PATCH', realpath(dirname(__FILE__) . '/../models'));
    define('VIEW_PATCH', realpath(dirname(__FILE__) . '/../views'));
    define('TEMPLATE_PATCH', realpath(dirname(__FILE__) . '/../views/template'));
    define('CONTROLLER_PATCH', realpath(dirname(__FILE__) . '/../controllers'));
    define('EXCEPTION_PATCH', realpath(dirname(__FILE__) . '/../exceptions'));
    
    //Arquivos
    require_once(realpath(dirname(__FILE__) . '/database.php'));
    require_once(realpath(dirname(__FILE__) . '/loader.php'));
    require_once(realpath(MODEL_PATCH . '/Model.php'));    
    require_once(realpath(EXCEPTION_PATCH . '/AppException.php'));
    require_once(realpath(EXCEPTION_PATCH . '/ValidationException.php'));
?>