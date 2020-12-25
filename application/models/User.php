<?php
    class User extends DB {
        public function add($firstname, $lastname, $email, $phone, $password) {
            try {
                $sql = $this->connection->prepare("INSERT INTO User (FirstName,LastName,Email,Phone,Password,Role)VALUES (:firstname, :lastname, :email, :phone, :password, :role)");
                return $sql->execute(array(
                    ":firstname" => $firstname,
                    ":lastname" => $lastname,
                    ":email" => $email,
                    ":phone" => $phone,
                    ":password" => $password,
                    ":role" => 'user',
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


        public function addAvatar($avatar_path , $email) {
            try {
                $sql = $this->connection->prepare("UPDATE User SET avatar = :avatar WHERE Email = :email");
                return $sql->execute(array(
                    ":avatar" => $avatar_path,
                    ":email" => $email
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }    
        }

        public function getAllUser() {
            try {
                $sql = $this->connection->prepare("SELECT * FROM User WHERE Email Not In (SELECT Email From User Where Role = 'admin')");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


        public function deleteUser($userEmail) {
            try {
                $sql = $this->connection->prepare("DELETE FROM User Where Email = :email " );
                return $sql->execute(array(
                    ":email" => $userEmail
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }



        public function getUser($email) {
            try {
                $sql = $this->connection->prepare("SELECT * FROM User WHERE Email = :email");
                $sql->execute(array(
                    ":email" => $email
                ));
                $result = $sql->fetch(PDO::FETCH_ASSOC);
                return json_encode($result);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


        public function getProfileUser($email) {
            try {
                $sql = $this->connection->prepare("SELECT FirstName,LastName,Email,Phone FROM User WHERE Email = :email");
                $sql->execute(array(
                    ":email" => $email
                ));
                $result = $sql->fetch(PDO::FETCH_ASSOC);
                return json_encode($result);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        
        public function updatePassword($email, $password) {
            try {
                $sql = $this->connection->prepare("UPDATE User SET Password = :password WHERE Email = :email");
                return $sql->execute(array(
                    ":email" => $email,
                    ":password" => $password,
                ));
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


        public function updateUser($firstName,$lastName,$email,$phone) {
            try {
                $sql = $this->connection->prepare("UPDATE User SET FirstName= :firstname , LastName= :lastname, Phone= :phone WHERE Email= :email");
                $sql->execute(array(
                    ":firstname" => $firstName,
                    ":lastname" => $lastName,
                    ":phone" => $phone,
                    ":email" => $email
                ));
                // $result = $sql->fetch(PDO::FETCH_ASSOC);
                // return json_encode("Oke");
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


        public function getRole($email) {
            try {
                $sql = $this->connection->prepare("SELECT Role FROM User WHERE Email =:email");
                $sql->execute(array(
                    ":email" => $email
                ));
                $result = $sql->fetch(PDO::FETCH_ASSOC);
                return json_encode($result);

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }




    }
?>