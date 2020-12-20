<?php 
    class Controller {


        public function model($model) {
            require_once "./application/models/".$model.".php";
            return new $model;
        }


        public function view($view , $data=[]) {
            require "./application/views/".$view.".php";
        }

        public function get_url($string) {
            $dirName = dirname(dirname(__FILE__) . ".." . DIRECTORY_SEPARATOR);
            $dirName = str_replace('\\', "/", $dirName);    
            $base = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dirName);
            return $base.'/'.$string;
        }


    }



?>