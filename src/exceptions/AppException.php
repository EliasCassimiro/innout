<?php
    class AppException extends Exception {
        public function __construct ($message, $code = 0, $previous = null) {
            parent::__construct ($message, $code, $previous);
        }
    }
?>  