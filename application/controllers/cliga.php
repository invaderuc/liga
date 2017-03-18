<?php
	class Cliga extends CI_Controller{
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('mliga');
		}
	
		public function index(){
			if ($this->session->userdata('s_per_id') != null) {
				
				$titulo['title'] = "Ligas";//titulo head
				$this->load->view('head',$titulo);
				$this->load->view('liga/vliga');
				$this->load->view('footer');
			}
			else{
				$data["mensaje"] = "Error al iniciar sesión";
				$this->load->view('head');
				$this->load->view('login',$data);
				$this->load->view('footer');
			}
			
		}
		public function getliga(){
			if ($this->session->userdata('s_per_id') != null) {

				echo json_encode($this->mliga->getLiga());

				$titulo['title'] = "Liga";//titulo head

			}
			else{
				$data["mensaje"] = "Error al iniciar sesión";
				$this->load->view('head');
				$this->load->view('login',$data);
				$this->load->view('footer');
			}
		}
	}
?>