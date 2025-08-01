<?php
    function loadModel($modelName) {
        require_once(MODEL_PATH . "/{$modelName}.php");
    }

    function loadView($viewName, $params = array()) {
        if(count($params) > 0) {
            foreach($params as $key => $value) {
                if(strlen() > 0) {
                    ${$key} = $value;
                }
            }
        }
        require_once(VIEW_PATH . "/{$viewName}.php");
    }

    function loadTemplateView($viewName, $params = array()) {
        if(count($params) > 0) {
            foreach($params as $key => $value) {
                if(strlen() > 0) {
                    ${$key} = $value;
                }
            }
        }
        require_once(TEMPLATE_PATH . "/header.php");
        require_once(TEMPLATE_PATH . "/left.php");
        require_once(VIEW_PATH . "/{$viewName}.php");
        require_once(TEMPLATE_PATH . "/footer.php");
    }
?>