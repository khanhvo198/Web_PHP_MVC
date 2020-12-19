<?php 
    class Login extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "login.style.css";
            $this->data["title"] = "Login";

            
            $this->view("Login/index" , $this->data);
        }

        function authenticate() {
            if(isset($_POST["btnLogin"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                
                $userModel = $this->model("User");
                $result = json_decode($userModel->getUser($email), true);
                if (isset($result["Password"])) {
                    $hash = $result["Password"];
                    if (password_verify($password, $hash)) {
                        $_SESSION["firstname"] = $result["FirstName"];
                        $_SESSION["lastname"] = $result["LastName"];
                        $_SESSION["email"] = $result["Email"];
                        $_SESSION["phone"] = $result["Phone"];
                        $_SESSION["password"] = $result["Password"];
                        $_SESSION["signedin"] = true;
                        header("Location: http://localhost/Web_Assignment_02/Profile");
                        exit();
                    }
                }
            }
            header("Location: http://localhost/Web_Assignment_02/Login");
            exit();           
        }

    }
?>