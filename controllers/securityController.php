<?php

class securityController extends Security {

    public function login(){

        $user = parent::validateLogin($_POST['Identificacion']);

        if(!is_object($user)) die('Ingreso incorrecto.');
        
        if(is_object($user) ){
       
          switch ($user->id_role) {
            case 1:
              echo "Erees usuario"; 
               header("location:?Controller=index&method=Interfaz_usuario");
              break;
            default:
            echo "Erees administrador";
            header("location:?Controller=index&method=Interfaz_admin");
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