<?php
     class TestimonialEntryClass{

        public $name = 'slug'; 
        public $text = 'Insert text here'; 
        public $shortened = 'a short version'; 
        public $linkUrl = ''; 
        public $featured = false;

        function __construct($name, $text, $shortened, $linkUrl = null, $featured = false){
                $this->name = $name;
                $this->text = $text;
                $this->shortened = $shortened;
                $this->linkUrl = $linkUrl;
                $this->featured = $featured;
        }
    }
?>