<?php
    class CourseModel extends DB {
        // public function add($firstname, $lastname, $email, $phone, $password) {
        //     try {
        //         $sql = $this->connection->prepare("INSERT INTO User VALUES (:firstname, :lastname, :email, :phone, :password)");
        //         return $sql->execute(array(
        //             ":firstname" => $firstname,
        //             ":lastname" => $lastname,
        //             ":email" => $email,
        //             ":phone" => $phone,
        //             ":password" => $password
        //         ));
        //     } catch (Exception $e) {
        //         return false;
        //     }
        // }

        public function getAllCourses() {
            try {
                $sql = $this->connection->prepare("SELECT * FROM Course");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            } catch (Exception $e) {
                return $e->getMessage();
            }         
        }

        public function getCourse($name) {
            try {
                $sql = $this->connection->prepare("SELECT * FROM Course WHERE Name = :name");
                $sql->execute(array(
                    ":name" => $name
                ));
                $result = $sql->fetch(PDO::FETCH_ASSOC);
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















        

        public function add($name, $price, $startDate, $endDate, $learningDay,$startHour,$endHour,$image,$description) {
            try {
                $sql = $this->connection->prepare("INSERT INTO Course VALUES (:name, :price, :startDate, :endDate, :learningDay, :startHour, :endHour, :image, :description)");
                return $sql->execute(array(
                    ":name" => $name,
                    ":price" => $price,
                    ":startDate" => $startDate,
                    ":endDate" => $endDate,
                    ":learningDay" => $learningDay,
                    ":startHour" => $startHour,
                    ":endHour" => $endHour,
                    ":image" => $image,
                    ":description" => $description
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function deleteCourse($courseName) {
            try {
                $sql = $this->connection->prepare("DELETE FROM Course Where Name = :name " );
                return $sql->execute(array(
                    ":name" => $courseName
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function editCourse($name, $price, $startDate, $endDate, $learningDay,$startHour,$endHour,$image,$description) {
            try {
                $sql = $this->connection->prepare("UPDATE Course SET Price = :price, StartDate =:startDate, EndDate =:endDate , LearningDay = :learningDay, StartHour = :startHour, EndHour =  :endHour, Image = :image , Description = :description  WHERE Name = :name");
                return $sql->execute(array(
                    ":name" => $name,
                    ":price" => $price,
                    ":startDate" => $startDate,
                    ":endDate" => $endDate,
                    ":learningDay" => $learningDay,
                    ":startHour" => $startHour,
                    ":endHour" => $endHour,
                    ":image" => $image,
                    ":description" => $description
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }





    }
?>