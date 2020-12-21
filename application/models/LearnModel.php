<?php
    class LearnModel extends DB {
        public function add($email, $coursename) {
            try {
                $sql = $this->connection->prepare("INSERT INTO Learn VALUES (:email, :coursename)");
                return $sql->execute(array(
                    ":email" => $email,
                    ":coursename" => $coursename
                ));
            } catch (Exception $e) {
                return false;
            }
        }

        public function getAllClasses($email) {
            try {
                $sql = $this->connection->prepare("SELECT * FROM Learn WHERE Email = :email");
                $sql->execute(array(
                    ":email" => $email
                ));
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            } catch (Exception $e) {
                return json_encode($e->getMessage());
            }         
        }

        // public function updatePassword($email, $password) {
        //     try {
        //         $sql = $this->connection->prepare("UPDATE User SET Password = :password WHERE Email = :email");
        //         return $sql->execute(array(
        //             ":email" => $email,
        //             ":password" => $password,
        //         ));
        //     } catch (Exception $e) {
        //         return $e->getMessage();
        //     }
        // }
    }
?>