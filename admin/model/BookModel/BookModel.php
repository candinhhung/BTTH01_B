<?php
    
    class BookModel {



        private $Id;
        private $Title;
        private $Author;
        private $Publisher;
        private $Year;
        private $Chapter;

        function index(){
            require 'ListBook.php';
            return $ListBook;
        }

        function add(){
            require 'ListBook.php';
            
            return $ListBook;
        }
    }
?>