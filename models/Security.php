<?php

class Security extends Database{

    public function validateLogin($Identificacion){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE Identificacion = ?");
            $result->bindParam(1, $Identificacion, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    public static function verifyUser(){
        if(! isset($_SESSION['user'])) header('location:?controller=index');
    }
//
    public function verifyRole($id_role){
        if(! $role == $_SESSION['user']['id_role']) header('location:?controller=index&method=index');
    }

}