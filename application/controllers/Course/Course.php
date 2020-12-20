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
        
            $courseModel = $this->model("CourseModel");
            $course = json_decode($courseModel->getCourse($name), true);
            $this->data["course"] = $course;

            $this->view("Course/detail", $this->data);
        }


    }
?>
