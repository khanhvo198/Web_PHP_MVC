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
    }
?>