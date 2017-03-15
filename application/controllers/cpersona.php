<?php
	class Cpersona extends CI_Controller{
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('mpersona');
		}
		public function index(){
			$data = array(
				'info'=>$this->mpersona->personas_listar()
				);

			$this->load->view('head');
			$this->load->view('persona/vpersona',$data);
			$this->load->view('footer');
		}
		public function add(){
			$this->load->view('head');
			$this->load->view('persona/vaddpersona');
			$this->load->view('footer');
		}
		public function view(){
			$id = $this->input->get("id");
			$data = $this->mpersona->buscar($id);
			$titulo['title'] = $data['nombre'];//titulo head
			$this->load->view('head',$titulo);
			$this->load->view('persona/vviewpersona',$data);
			$this->load->view('footer');

		}
		public function guardar(){
			$param['nombre'] = $this->input->post("nombre");
			$param['correo'] = $this->input->post("correo");
			$param['clave'] = $this->input->post("clave");

			$this->mpersona->guardar($param);
		}

	}
?>
