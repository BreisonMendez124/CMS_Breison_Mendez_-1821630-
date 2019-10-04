<?php

class indexController extends User{

    
    
    /**
     * Vista principal de los controladores.
     * Principalmente casi siempre se retorna una vista con una tabla para mostrar todos los registros. (Esto depende de la necesidad del cliente)
     */
    public function index(){

        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';

    }

    /**
     * Esta función retorna una vista con un formulario.
     */
    public function create(){
        echo 'function create';
    }

    /**
     * Esta función se encarga de validar y almacenar en la base de datos la informacion enviada desde un formulario.
     */
    public function store(){

    }

    /**
     * Esta función retorna una vista con un formulario con valores definidos de un registro especifico.
     */
    public function edit(){

    }

    /**
     * Esta función se encarga de validar y actualizar en la base de datos la información de un registro especifico.
     */
    public function update(){

    }

    /**
     * Esta funcion se encarga de borrar un registro especifico en la base de datos.
     */
    public function delete(){

    }
     public function login(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
    }

    public function Interfaz_admin(){
     require_once 'views/Users/admin/header.php';
        require_once 'views/Users/admin/index.php';
        require_once 'views/layouts/footer.php';   
    }
    public function Interfaz_usuario(){
        require_once 'views/Users/user/header.php';
        require_once 'views/Users/user/index.php';
        require_once 'views/layouts/footer.php';     
    }

}