<?php 
	class Mpersona extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		public function guardar($param){
			$campos = array(
				'PER_NOMBRE' => $param['nombre'],
				'PER_CORREO' => $param['correo'],
				'PER_CLAVE' => $param['clave'],
				'PER_REGISTRO' => Date('Y-m-d h:i:s')
			);
			$this->db->insert('personas',$campos);
		}
		public function personas_listar(){
			$query = $this->db->query("SELECT * FROM personas;");

			$query = $this->db->get('personas');
			if ($query->num_rows() >0) {
				return $query;
			}
		}
	}
?>