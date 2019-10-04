<?php

class securityController extends Security {

    public function login(){
        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) die('Ingreso incorrecto.');

        if(is_object($user) ){

            switch ($user->rol_id) {
                case 1:
                    echo "Erees usuario";
                    header("location:?controller=Admin");
                    break;
                default:
                    echo "Erees administrador";
                    header("location:?controller=Publication");
                    break;
            }


        }

    }


    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('location:?controller=index');
    }

}