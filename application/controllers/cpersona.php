<?php
	class Cpersona extends CI_Controller{
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('mpersona');
		}
		public function index(){
			if ($this->session->userdata('s_per_id') != null) {
				$data = array(
				'info'=>$this->mpersona->personas_listar()
					);
				$titulo['title'] = "Personas";//titulo head
				$this->load->view('head',$titulo);
				$this->load->view('persona/vpersona',$data);
				$this->load->view('footer');
			}
			else{
				$data["mensaje"] = "Error al iniciar sesión";
				$this->load->view('head');
				$this->load->view('login',$data);
				$this->load->view('footer');
			}
			
		}
		public function add(){
			$titulo['title'] = "Agregar Persona";
			$this->load->view('head',$titulo);
			$this->load->view('persona/vaddpersona');
			$this->load->view('footer');
		}
		public function update(){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$id = $this->input->get("id");
				$titulo['title'] = "Actualizar Persona";
				$titulo['id'] = $id;
				$this->load->view('head',$titulo);
				$this->load->view('persona/vupdatepersona',$id);
				$this->load->view('footer');
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$param['nombre'] = $this->input->post("nombre");
				$param['correo'] = $this->input->post("correo");
				$param['clave'] = $this->input->post("clave");
				$param['id'] = $this->input->post("id");

				$this->mpersona->actualizar($param);
				redirect(base_url("Cpersona"));
			}
			
		}
		public function view(){
			$id = $this->input->get("id");
			$data = $this->mpersona->buscar($id);
			$titulo['title'] = $data['nombre'];//titulo head
			$this->load->view('head',$titulo);
			$this->load->view('persona/vviewpersona',$data);
			$this->load->view('footer');

		}
		public function save(){
			$param['nombre'] = $this->input->post("nombre");
			$param['correo'] = $this->input->post("correo");
			$param['clave'] = $this->input->post("clave");

			$this->mpersona->guardar($param);
			redirect(base_url("Cpersona"));
		}
		public function delete(){
			$id = $this->input->get("id");
			
			$this->mpersona->eliminar($id);
			redirect(base_url("Cpersona"));
		}
	}
?>
