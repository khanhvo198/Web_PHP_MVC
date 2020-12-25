<?php 
    class Profile extends Controller {
        protected $data;
        function index() {
            $this->data["css"] = "profile.style.css";
            $this->data["title"] = "Profile";
            $modelUser = $this->model("User");
            $result = json_decode($modelUser->getUser($_SESSION['email']),true);
            $this->data['avatar'] = $result['avatar'];
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


        function updateAvatar() {

            // if ($_FILES["avatar"]['error'] != 0) {
            //   echo "Dữ liệu upload bị lỗi";
            //   die;
            // }
            if(isset($_FILES['avatar']['name'])){

                /* Getting file name */
                $filename = $_FILES['avatar']['name'];
             
                /* Location */
                // chmod('./assets',0777);
                // chmod('./avatar',0777);
                if (is_dir("./assets/avatar/".$_SESSION['email'])) {
                    chmod("./assets/avatar/".$_SESSION['email'] , 0777);
                    $files = glob("./assets/avatar/".$_SESSION['email'].'/*');
                    foreach($files as $file) {
                        if(is_file($file)) {
                            unlink($file);
                        }
                    }
                    rmdir("./assets/avatar/".$_SESSION['email'] );
                }
                if (!is_dir("./assets/avatar/".$_SESSION['email'])) {
                    mkdir("./assets/avatar/".$_SESSION['email'] , 0777);
                }
                $location = "./assets/avatar/".$_SESSION["email"].'/'.$filename;
                
                $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                $imageFileType = strtolower($imageFileType);
             
                /* Valid extensions */
                $valid_extensions = array("jpg","jpeg","png");
             
                $response = 0;
                /* Check file extension */
                if(in_array(strtolower($imageFileType), $valid_extensions)) {
                   /* Upload file */
                   if(move_uploaded_file($_FILES['avatar']['tmp_name'],$location)){
                      $response = $location;
                   }
                }
                $modelUser = $this->model("User");
                $modelUser->addAvatar($location, $_SESSION['email']);
                echo $response;
                // echo $filename;
             }
        
        
        
        
        }


    }
?>
