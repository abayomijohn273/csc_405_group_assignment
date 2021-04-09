<?php
    class Page_Data{
        public $title = "";
        public $nav = "";
        public $content = "";
        public $footer = "";
        public $css = "";
        public $js = "";
        public $embeddedStyle = "";
        public $loader = "";

        public function addCSS($href){
            $this->css .= "<link rel='stylesheet' type='text/css' href='$href'>";
        }

        public function addJS($src){
            $this->js .= "<script type='text/javascript' src='$src'></script>";
        }
    }
?>