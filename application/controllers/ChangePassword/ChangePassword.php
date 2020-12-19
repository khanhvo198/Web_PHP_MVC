<?php 
    class ChangePassword extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "changepassword.style.css";
            $this->data["title"] = "Change Password";
            $this->data["js"] = "changepassword.js";
            
            $this->view("ChangePassword/index" , $this->data);
        }

        function process() {
            if(isset($_SESSION["signedin"])) {
                $oldpassword = $_POST["oldpassword"];
                $newpassword = $_POST["newpassword"];
                $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
                
                $userModel = $this->model("User");
                $result = json_decode($userModel->getUser($_SESSION["email"]), true);

                if(password_verify($oldpassword, $result["Password"])) {
                    $result = $userModel->updatePassword($_SESSION["email"], $newpassword);
                    if ($result === true) {
                        echo json_encode(["status" => "success"]);
                    } else {
                        echo json_encode(["status" => "fail"]);
                    }
                    exit();
                }
            }
            echo json_encode(["status" => "fail"]);
            exit();
        }


    }
?>
