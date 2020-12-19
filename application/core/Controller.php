<?php 
    class Controller {
        public function model($model) {
            require_once "./application/models/".$model.".php";
            return new $model;
        }


        public function view($view , $data=[]) {
            require "./application/views/".$view.".php";
        }


    }



?>