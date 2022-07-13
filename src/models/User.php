<?php
    require_once(realpath(MODEL_PATH . '/Model.php'));
    class User extends Model{
        protected static $tableName = 'users';
        protected static $columns = [
            'id',
            'name2',
            'password',		
            'email',
            'start_date',		
            'end_date',		
            'is_admin'
        ];
    }

?>