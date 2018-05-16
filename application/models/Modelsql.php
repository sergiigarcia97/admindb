<?php

	class Modelsql extends CI_Controller {

		public function __construct (){

			parent::__construct();
			$this->load->database();

		}

		public function returnSql($sql){

			$resultat = $this->db->query($sql);

			return $resultat;

		}

		public function executaSql($sql){

			$resultat = $this->db->query($sql);

		}

		public function returnArray($sql){

			$resultat = $this->db->query($sql);
			$dades = $resultat->result_array();

			return $dades;

		}

		/*public function executaUpdate($sql){

			$resultat = $this->db->query($sql);

			return $resultat;

		}

		public function retornaDades($sql){

			$resultat = $this->db->query($sql);
			$d = $resultat->result_array();

			return $d;

		}*/

	}

?>