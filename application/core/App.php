<?php
    class App {
        protected $controller="Home";
        protected $action="index";
        protected $params=[];




        function __construct() {
            $arr = [];
            if(isset($_GET['url'])) {
                $arr = $this->urlProcess($_GET['url']);
            }
            // print_r($arr);
            
            if(isset($arr[0]) && file_exists("./application/controllers/".$arr[0].$arr[0].".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once("./application/controllers/".$this->controller."/".$this->controller.".php");
            $this->controller = new $this->controller;
            if(isset($arr[1])) {
                if(method_exists($this->controller,$arr[1])) {
                    $this->action = $arr[1];
                    unset($arr[1]);
                }
            }

            
            $this->params = $arr?array_values($arr):[];
            
            call_user_func_array([$this->controller,$this->action], $this->params);
        }

        function urlProcess($url) {
            return explode('/' , filter_var(trim($url,'/')));
        }
    }

?>