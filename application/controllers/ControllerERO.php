<?php 
	class ControllerERO extends CI_Controller {
		function index(){
			

			$conn = mysqli_init();
			mysqli_ssl_set($conn,NULL,NULL, "{C:\Users\user\Desktop\BaltimoreCyberTrustRoot.crt.pem}", NULL, NULL) ; 
			$a = mysqli_real_connect($conn, 'ero.mysql.database.azure.com', 'admindb@ero', '@1b2c3D5', 'ero', 3306, MYSQLI_CLIENT_SSL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
			if (mysqli_connect_errno($conn)) {
			die('Failed to connect to MySQL: '.mysqli_connect_error());
			}else{
				$sql = "select * from client";
				$resultado = mysqli_query($conn,'select * from client');
				if (!$resultado) {
				    die('Consulta no válida: ' . mysql_error());
				}
			}
					
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->view('Registre');
			//echo "ho";
		}

		function rebre(){
			$data['dades']=$this->input->post();
			return $this->load->view('Registre',$data);
		}

		function registrar(){
		//	$a['a'] = array();
			
			$this->load->helper('form');

			$this->load->model("Modelsql");

			$nom = $this->input->post('nom');
			$cognom = $this->input->post('cognom');
			$telefon = $this->input->post('telefon');
			$correu = $this->input->post('correu');
			$pass = $this->input->post('contrasenya');
			$compte = $this->input->post('compte');
			$dir1 = $this->input->post('dir1');
			$dir2 = $this->input->post('dir2');

			$sql = "insert into client(nom,cognom,telefon,correu,password,telefon,compte_bancari,direccio1,direccio2) values ('".$nom."','".$cognom."','".$telefon."','".$correu."','".$pass."','".$telefon."','".$compte."','".$dir1."','".$dir2."')";

			$this->Modelsql->executaSql($sql);

			$this->load->view("fitxers");
		
			return $this->load->view('Registrat');
		

		}

   }
?>