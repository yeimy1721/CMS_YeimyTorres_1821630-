<?php
//Herencia
class Publication extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT p.*, u.name FROM publication as p INNER JOIN users as u ON u.id = p.id_user");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO publication (title, description, url_image, id_user) VALUES (?,?,?,?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['url_image'], PDO::PARAM_STR);
            $result->bindParam(4, $data['id_user'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publication WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_publication($data){
        try{
            $result = parent::connect()->prepare("UPDATE publication SET title = ?, description = ?, url_image = ? WHERE id = ?");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['url_image'], PDO::PARAM_STR);
            $result->bindParam(4, $data['id'], PDO::PARAM_STR);

            return $result->execute();
        }catch (Exception $e){
            die("Error publication->update_publication() " . $e->getMessage());
        }
    }



    public function delete_publication($id){
        try{            
            $result = parent::connect()->prepare("DELETE from publication where id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error publication->register() " . $e->getMessage());
        }
    }

}
