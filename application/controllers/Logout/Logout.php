<?php 
    class Logout extends Controller {
        protected $data;

        function index() {
            if(isset($_SESSION['signedin'])){
                if (isset($_POST["btnLoginout"])) {
                    // remove all session variables
                    session_unset();
                    // destroy the session
                    session_destroy(); 
                    // redirect to login page
                    header("Location: http://localhost/Web_Assignment_02/Login");
                    exit();
                } 
            }
            header("Location: http://localhost/Web_Assignment_02/Home");
            exit();
        }

    }
?>