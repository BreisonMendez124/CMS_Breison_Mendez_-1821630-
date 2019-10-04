<?php
//Herencia
class User extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publicacion as p INNER JOIN usuarios as u ON u.Id = p.Id_user");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO publicacion (Id_public, Titulo, Descripcion, Imagen, Id_user) VALUES (?,?,?,?,?)");
            $result->bindParam(1, $data['Id_public'], PDO::PARAM_INT);
            $result->bindParam(2, $data['Titulo'], PDO::PARAM_STR);
            $result->bindParam(3, $data['Descripcion'], PDO::PARAM_STR);
            $result->bindParam(4, $data['Imagen'], PDO::PARAM_STR);  
            $result->bindParam(5, $data['Id_user'], PDO::PARAM_INT);  
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

    public function find($Id_public){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publicacion WHERE Id_public = ?");
            $result->bindParam(1, $Id_public, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE publicacion SET Titulo = ?, Descripcion = ? WHERE Id_public = ?");
            $result->bindParam(1, $data['Titulo'], PDO::PARAM_STR);
            $result->bindParam(2, $data['Descripcion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['Id_public'], PDO::PARAM_INT);

            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }

     public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM publicacion WHERE Id_public = ?");
            $result->bindParam(1, $data['Id_public'], PDO::PARAM_INT);
            return $result->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
