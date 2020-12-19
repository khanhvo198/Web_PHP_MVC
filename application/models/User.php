<?php
    class User extends DB {
        public function add($firstname, $lastname, $email, $phone, $password) {
            try {
                $sql = $this->connection->prepare("INSERT INTO User VALUES (:firstname, :lastname, :email, :phone, :password)");
                return $sql->execute(array(
                    ":firstname" => $firstname,
                    ":lastname" => $lastname,
                    ":email" => $email,
                    ":phone" => $phone,
                    ":password" => $password
                ));
            } catch (Exception $e) {
                return false;
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


    }
?>