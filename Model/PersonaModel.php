<?php
	include dirname(__file__,2)."/Model/Conexion.php";
	/**
	*
	*/
	class Persona
	{
		//variables para conexion DB
		private $conn;
		private $link;

		function __construct()
		{
			$this->conn   = new Conexion();
			$this->link   = $this->conn->conectarse();
		}

		//Trae todos los usuarios registrados
		public function getPersona()
		{
			$query  ="SELECT * FROM persona";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

				//Obtiene el usuario por id
		public function getPersonaById($id=NULL){
			if(!empty($id)){
				$query  ="SELECT * FROM persona WHERE id_persona=".$id;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		//Crea un nuevo usuario
		public function newPersona($data){
			$query  ="INSERT INTO persona (nombre, apellido, curp, telefono, email, pass, estado, ciudad) VALUES ('".$data['nombre']."','".$data['apellido']."','".$data['curp']."','".$data['telefono']."','".$data['email']."','".$data['pass']."','".$data['estado']."','".$data['ciudad']."')";
			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Edita el usuario por id
		public function setEditPersona($data){
			if(!empty($data['id'])){
				$query  ="UPDATE persona SET nombre='".$data['nombre']."', apellido='".$data['apellido']."', curp='".$data['curp']."', telefono='".$data['telefono']."', email='".$data['email']."', pass='".$data['pass']."', estado='".$data['estado']."', ciudad='".$data['ciudad']."'  WHERE id_persona=".$data['id'];
				$result =mysqli_query($this->link,$query);
				if($result){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}