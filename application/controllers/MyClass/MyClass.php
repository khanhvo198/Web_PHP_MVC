<?php 
    class MyClass extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "myclass.style.css";
            $this->data["title"] = "My Class";

            
            $this->view("MyClass/index" , $this->data);
        }

    }
?>