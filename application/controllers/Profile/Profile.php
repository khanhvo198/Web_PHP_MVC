<?php 
    class Profile extends Controller {
        protected $data;
        function index() {
            $this->data["css"] = "profile.style.css";
            $this->data["title"] = "Profile";
            $this->view("Profile/index" , $this->data);
        }


        function getProfileUser() {
            $modelUser = $this->model("User");
            $email = $_POST['email'];
            $result = json_decode($modelUser->getProfileUser($email));

            echo json_encode($result);
            // echo json_encode($email);
        }



        function update() {

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            // echo json_encode("OKe");

            #####


            #####

            $modelUser = $this->model("User");
            $result = $modelUser->updateUser($firstName,$lastName,$email,$phone);
            // $result = $this->modelUser->updateUser($firstName,$lastName,$email,$phone);
            echo json_encode($result);

        }


    }
?>
