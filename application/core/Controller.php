<?php 
    class Controller {
        public function model($model) {
            
        }


        public function view($view , $data=[]) {
            require("./application/views/".$view.".php");
        }


    }



?>