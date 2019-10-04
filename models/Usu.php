<?php

class Usu extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuarios");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
           
            $result = parent::connect()->prepare("INSERT INTO usuarios (Identificacion, Nombre, Apellido,Correo,Password,id_role) VALUES (?,?,?,?,?,?)");
            $result->bindParam(1, $data['Identificacion'], PDO::PARAM_INT);
            $result->bindParam(2, $data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(3, $data['Apellido'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Correo'], PDO::PARAM_STR);
            $result->bindParam(5, $data['Password'], PDO::PARAM_STR);
            $result->bindParam(6, $data['id_role'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

    public function find($Identificacion){
        try{
            $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE Identificacion = ?");
            $result->bindParam(1, $Identificacion, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE usuarios SET Nombres = ?, Apellidos = ? WHERE Identificacion = ?");
            $result->bindParam(1, $data['Identificacion'], PDO::PARAM_INT);
            $result->bindParam(2, $data['Nombres'], PDO::PARAM_STR);
            $result->bindParam(3, $data['Apellidos'], PDO::PARAM_INT);
            
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }

     public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM usuarios WHERE Identificacion = ?");
            $result->bindParam(1, $data['Identificacion'], PDO::PARAM_INT);
            return $result->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
