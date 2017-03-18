<?php
	class Cindex extends CI_Controller{
		function __construct() {
			parent::__construct();
		}
		public function index(){
			$titulo['title'] = "Ligas Observer";
			$this->load->view('head',$titulo);
			$this->load->view('index');
			$this->load->view('footer');
		}
	}
?>
