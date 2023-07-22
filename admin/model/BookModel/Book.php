<?php
    class Book {
        private String $Id;
        private String $Title;
        private String $Author;
        private String $Publisher;
        private int $Year;
        private array $Chapter;

        public function __construct(String $Id,String $Title,String $Author,String $Publisher,String $Year,Array $Chapter)
        {
            
        }
        public function getId(){
            return $this->Id;
        }
        public function getTitle(){
            return $this->Title;
        }
        public function getAuthor(){
            return $this->Author;
        }
        public function getPublisher(){
            return $this->Publisher;
        }
        public function getYear(){
            return $this->Year;
        }
        public function getChapter(){
            return $this->Chapter;
        }

    }
?>