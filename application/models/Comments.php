<?php
    class Comments extends DB {
        public function add($email,$courseName,$comment) {
            try {
                $sql = $this->connection->prepare("INSERT INTO Comments (Email,Name,Comment)VALUES (:email, :name, :comment)");
                return $sql->execute(array(
                    ":email" => $email,
                    ":name" =>$courseName,
                    ":comment" => $comment
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


        public function getAllComments($courseName) {
            try {
                $sql = $this->connection->prepare("SELECT c.Email,c.Comment,u.avatar FROM Comments c,User u WHERE name = :name and c.Email = u.Email");
                $sql->execute(array(
                    ":name" => $courseName
                ));
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        
    }