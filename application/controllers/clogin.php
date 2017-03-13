<?php
	class Clogin extends CI_Controller{
		function __construct() {
			parent::__construct();
			$titulo['title'] = "Liga";
			$this->load->model('mlogin');
		}
		public function index(){
			$titulo['title'] = "Login";
			$this->load->view('head',$titulo);
			$this->load->view('login');
			$this->load->view('footer');
		}
		public function login(){
			$usuario = $this->input->post("usuario");
			$password = $this->input->post("password");
			$result = $this->mlogin->ingresar($usuario,$password);
			if ($result == 1 ) {
				$this->load->view('head');
				$this->load->view('index');
				$this->load->view('footer');
			}
			else{
				$this->load->view('footer');
			}
		}
		public function close(){
			$this->session->sess_destroy();

			redirect('/clogin');
		}
	}
?>
