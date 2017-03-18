<?php 
	class Mliga extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function getLiga(){
			$query = $this->db->query("SELECT * FROM ligas WHERE LIG_ESTADO = 1;");

			$query = $this->db->get('ligas');
			if ($query->num_rows() >0) {
				return $query->result();
			}
		}
	}
?>