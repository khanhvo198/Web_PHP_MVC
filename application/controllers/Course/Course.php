<?php
    class Course extends Controller {
        protected $data;

        function __construct() {
            $this->data["css"] = "course.style.css";
            $this->data["title"] = "Course";
        }

        function index() {
            $courseModel = $this->model("CourseModel");
            $allCourses = json_decode($courseModel->getAllCourses(), true);
            $this->data["courses"] = $allCourses;
           
            $this->view("Course/index" , $this->data);
        }

        function detail($name) {
            $name = str_replace("_", " ", $name);
            
            $modelUser = $this->model("User");
            $result = json_decode($modelUser->getUser($_SESSION['email']),true);
            $this->data['avatar'] = $result['avatar'];




            $courseModel = $this->model("CourseModel");
            $course = json_decode($courseModel->getCourse($name), true);
            $this->data["course"] = $course;
            $this->data["js"] = "coursedetail.js";

            $this->view("Course/detail", $this->data);
        }

        function addComment() {
            $email = $_POST['email'];
            $courseName = $_POST['courseName'];
            $comment = $_POST['comment'];
            $commentModel = $this->model("Comments");
            $result = $commentModel->add($email,$courseName,$comment);
            echo $result;
            // var_dump($email);
        }

        function getAllComments() {
            $courseName = $_POST['courseName'];
            $commentModel = $this->model("Comments");
            $result = $commentModel->getAllComments($courseName);
            echo $result;
        }



        function enroll() {
            if(isset($_POST["btnEnroll"])) {
                $coursename = $_POST["btnEnroll"];
                if(isset($_SESSION["signedin"])) {
                    $learnModel = $this->model("LearnModel");
                    $result = $learnModel->add($_SESSION["email"], $coursename);
                    if($result === true) {
                        header("Location: ".$this->get_url("../MyClass"));
                        exit();                        
                    } else {
                        echo "Fail";
                    }
                } else {
                    header("Location: ".$this->get_url("../Login"));
                    exit();
                }
            }
        }


    }
?>
