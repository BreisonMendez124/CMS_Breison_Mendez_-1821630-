<?php

class userController extends User{
    
    
    public function __construct()
    {
        Security::verifyUser();
//        die('hola');
    }
  
   
    public function index(){                
        require_once 'views/Users/admin/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    public function create_user(){
        require_once 'views/users/user/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
    $url_path = 'assets/upload/' . $_FILES['Imagen']['name'];    
    move_uploaded_file($_FILES['Imagen']['tmp_name'], $url_path);
    $_POST ['Imagen'] = $url_path;
    $_POST['Password'] = password_hash($_POST['Password'], PASSWORD_DEFAULT);
     echo parent::register($_POST) ? header('location: ?controller=user') : 'Error en el registro';
    }


    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['Id_public']);
        require_once 'views/Users/admin/header.php';
        require_once 'views/user/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){  
        var_dump(parent::update_register($_POST)?  header('location: ?controller=user'):'Error al actualizar datos');
    }


    //
    public function deletes(){
       var_dump(parent::delete_register($_REQUEST)? header('location: ?controller=user'):'Error al borrar datos');



    }
    

}
