<?php 
    class Admin extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "admin.style.css";
            $this->data["title"] = "BK ACADEMY";
            



            $courseModel = $this->model("CourseModel");
            $allCourses = json_decode($courseModel->getAllCourses(), true);
            $this->data["courses"] = $allCourses;

            $this->view("Admin/index" , $this->data);
        }


        function addCourse() {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $startDate = $_POST['start_date'];
            $endDate = $_POST['end_date'];
            $learningDay = $_POST['learning_day'];
            $startHour = $_POST['start_hour'];
            $endHour = $_POST['end_hour'];
            $image = "../public/images/product/01.png";
            $description = $_POST['description'];

            // echo json_encode($name);

            $courseModel = $this->model("CourseModel");
            $result = $courseModel->add($name,$price,$startDate,$endDate,$learningDay,$startHour,$endHour,$image,$description);
            // echo json_encode()
            echo json_encode($result);
        }


        function getAllCourse() {
            $courseModel = $this->model("CourseModel");
            $allCourses = json_decode($courseModel->getAllCourses(), true);
            echo json_encode($allCourses);
        }


        function deleteCourse() {
            $courseName = $_POST['course_name'];
            $courseModel = $this->model("CourseModel");
            $result = $courseModel->deleteCourse($courseName);
            echo json_encode($result);
        }


        function getCourse() {
            $courseModel = $this->model("CourseModel");
            $courseName = $_POST['course_name'];
            $course = json_decode($courseModel->getCourse($courseName),true);
            echo json_encode($course);
        }

        function editCourse() {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $startDate = $_POST['start_date'];
            $endDate = $_POST['end_date'];
            $learningDay = $_POST['learning_day'];
            $startHour = $_POST['start_hour'];
            $endHour = $_POST['end_hour'];
            $image = "../public/images/product/01.png";
            $description = $_POST['description'];


            $courseModel = $this->model("CourseModel");
            $result = $courseModel->editCourse($name,$price,$startDate,$endDate,$learningDay,$startHour,$endHour,$image,$description);
        
            echo json_encode($result);

        }




    }
?>
