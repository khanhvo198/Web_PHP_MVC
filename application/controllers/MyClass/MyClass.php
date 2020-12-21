<?php 
    class MyClass extends Controller {
        protected $data;

        function __construct() {
            $this->data["css"] = "myclass.style.css";
            $this->data["title"] = "My Class";

            $this->learnModel = $this->model("LearnModel");
            $this->courseModel = $this->model("CourseModel");           
        }

        function index() {
            $result = json_decode($this->learnModel->getAllClasses($_SESSION["email"]), true);
            $this->data["onprogress"] = [];
            $this->data["comming"] = [];
            $this->data["finished"] = [];
            foreach($result as $class) {
                $course = json_decode($this->courseModel->getCourse($class["Name"]), true);
                $startdate = date_create($course["StartDate"]);
                $enddate = date_create($course["EndDate"]);
                $currentdate = date_create(date('Y-m-d'));
                $cur2start = date_diff($currentdate,$startdate);
                $cur2end = date_diff($currentdate,$enddate);
                $coursestatus = "";
                if ($cur2start->invert && !$cur2end->invert) {
                    $coursestatus = "onprogress";
                } else if ($cur2end->invert) {
                    $coursestatus = "finished";
                } else if (!$cur2start->invert) {
                    $coursestatus = "comming";
                }
                array_push($this->data[$coursestatus], $course);
            }
            
            $this->view("MyClass/index" , $this->data);
        }

    }
?>