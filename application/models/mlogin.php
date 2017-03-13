<?php 
	class Mlogin extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		public function ingresar($usuario,$password){		
			$this->db->select("p.per_id ,p.per_correo ,p.per_nombre");
			$this->db->from("personas p");
			$this->db->where("p.per_correo",$usuario);
			$this->db->where("p.per_clave",$password);

			$resultado = $this->db->get();

			if ($resultado->num_rows() == 1) {
				$r = $resultado->row();
				$s_usuario = array(
					's_per_id' => $r->per_id,
					's_per_correo' => $r->per_correo,
					's_per_nombre' => $r->per_nombre
					);
				$this->session->set_userdata($s_usuario);
				return(1);
			}
			else{
				return(0);
			}
		}
	}
?>