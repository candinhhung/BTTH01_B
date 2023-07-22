<?php

    class BookController {
        public function index(){
            include '/xampp/htdocs/phpbook/BTTH01_B/admin/model/BookModel/BookModel.php';
            $b = new BookModel;
            $a = $b->index();
            include '/xampp/htdocs/phpbook/BTTH01_B/admin/view/index.php';
        }

        public function add(){
            
        }
    }
?>