<?php 
    class Product extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "product.style.css";
            $this->data["title"] = "Product";
            
            $this->view("Product/index" , $this->data);
        }


    }
?>
