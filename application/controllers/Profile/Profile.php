<?php 
    class Profile extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "profile.style.css";
            $this->data["title"] = "Profile";

            $userModel = $this->model("User");
            $result = json_decode($userModel->getUser($_SESSION["email"]), true);   
            $this->data["firstname"] = $result["FirstName"];
            $this->data["lastname"] = $result["LastName"];
            $this->data["email"] = $result["Email"];
            $this->data["phone"] = $result["Phone"];
            
            $this->view("Profile/index" , $this->data);
        }

    }
?>
