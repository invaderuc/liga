<?php 
	class Mlogin extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		public function ingresar($usuario,$password){		
			#$this->db->select("p.per_id ,p.per_correo ,p.per_nombre");
			#$this->db->from("personas p");
			#$this->db->where("p.per_correo",$usuario);
			#$this->db->where("p.per_clave",$password);

			$resultado = $this->db->query("SELECT * FROM PERSONAS WHERE PER_CORREO = '$usuario' AND PER_CLAVE = '$password'");
			
			if ($resultado->num_rows() == 1) {
				$r = $resultado->row();
				$s_usuario = array(
					's_per_id' => $r->PER_ID,
					's_per_correo' => $r->PER_CORREO,
					's_per_nombre' => $r->PER_NOMBRE
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