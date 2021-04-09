<?php
	class Admin_Page_Data{
		public $title = "";
		public $content = "";
		public $nav = "";
		public $sidebar = "";
		public $footer = "";
		public $css = "";
		public $js = "";
		public $loader = "";
		public $embeddedStyle = "";

		public function addCSS($href){
			$this->css .= "<link rel='stylesheet' type='text/css' href='$href'>";
		}

		public function addJS($src){
			$this->js .= "<script type='text/javascript' src='$src'></script>";
		}
	}
?>