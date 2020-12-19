<?php
    class Course extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "course.style.css";
            $this->data["title"] = "Course";

            $courseModel = $this->model("CourseModel");
            $allCourses = json_decode($courseModel->getAllCourses(), true);
            $this->data["courses"] = $allCourses;
            // foreach ($allCourses as $course) {
            //     foreach($course as $field) {
            //         echo $field;
            //     }
            // }
            $this->view("Course/index" , $this->data);
        }

        function detail() {
            echo "Detail";
        }


    }
?>
