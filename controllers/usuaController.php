<?php

class usuaController extends Usu{
    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/Users/admin/header.php';
        require_once 'views/Usua/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/Users/admin/header.php';
        require_once 'views/Usua/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){

        $_POST['Password'] = password_hash($_POST['Password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=usua') : 'Error en el registro';

    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        
        require_once 'views/Users/admin/header.php';
        require_once 'views/usua/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        var_dump(parent::update_register($_POST)? header('location: ?controller=usua'):'Error en la actualizacion');
    }


    //
    public function deletes(){
       var_dump(parent::delete_register($_REQUEST)? header('location: ?controller=usua'):'Error al borrar datos');



    }
    

}