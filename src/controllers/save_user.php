<?php
    session_start();
    requireValidSession();

    $expection = null;

    if(count($_POST > 0)){
        try {
            $newUser = new User($_POST);
            $newUser->insert();
            addSuccessMsg('Usuário cadastrado com sucesso!');
            $_POST = [];
        } catch(Exception $e) {
            $exception = $e;
        }
    }

    loadTemplateView('save_user', $_POST + [
        'exception' => $expection
    ]);
?>