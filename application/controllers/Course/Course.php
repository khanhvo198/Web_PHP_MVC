<?php
    class Course extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "course.style.css";
            $this->data["title"] = "Course";
            
            $this->view("Course/index" , $this->data);
        }


    }
?>
