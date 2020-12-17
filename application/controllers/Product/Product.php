<?php 
    class Product extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "product.style.css";

            
            $this->view("Product/index" , $this->data);
        }


    }
?>
