<?php 
    class Register extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "register.style.css";
            $this->data["title"] = "Register";
   
            $this->view("Register/index" , $this->data);
        }

        function registerUser() {
            if(isset($_POST["btnRegister"])) {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $password = $_POST["password"];
                $password = password_hash($password, PASSWORD_DEFAULT);
                
                $userModel = $this->model("User");
                $result = $userModel->add($firstname, $lastname, $email, $phone, $password);
                
                if($result === true) {
                    header("Location: http://192.168.64.7/Web_Assignment_02/Login");
                } else {
                    header("Location: http://192.168.64.7/Web_Assignment_02/Register");
                }
            }
        }


    }
?>
