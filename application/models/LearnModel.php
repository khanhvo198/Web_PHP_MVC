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

        // public function getAllCourses() {
        //     try {
        //         $sql = $this->connection->prepare("SELECT * FROM Course");
        //         $sql->execute();
        //         $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        //         return json_encode($result);
        //     } catch (Exception $e) {
        //         return $e->getMessage();
        //     }         
        // }

        // public function getCourse($name) {
        //     try {
        //         $sql = $this->connection->prepare("SELECT * FROM Course WHERE Name = :name");
        //         $sql->execute(array(
        //             ":name" => $name
        //         ));
        //         $result = $sql->fetch(PDO::FETCH_ASSOC);
        //         return json_encode($result);
        //     } catch (Exception $e) {
        //         return json_encode($e->getMessage());
        //     }
        // }

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