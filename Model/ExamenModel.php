<?php
	include dirname(__file__,2)."/Model/Conexion.php";
	/**
	*
	*/
	class Examen
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
		public function getExamen()
		{
			$query  ="SELECT * FROM examen";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

				//Obtiene el usuario por id
		public function getExamenById($id=NULL){
			if(!empty($id)){
				$query  ="SELECT * FROM examen WHERE id_pregunta=".$id;
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
		public function newExamen($data){
			$query  ="INSERT INTO examen (pregunta, opcion1, opcion2, opcion3, opcion4, respuesta VALUES ('".$data['pregunta']."','".$data['opcion1']."','".$data['opcion2']."','".$data['opcion3']."','".$data['opcion4']."','".$data['respuesta']."')";
			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Edita el usuario por id
		public function setEditExamen($data){
			if(!empty($data['id'])){
				$query  ="UPDATE examen SET pregunta='".$data['pregunta']."', opcion1='".$data['opcion1']."', opcion2='".$data['opcion2']."', opcion3='".$data['opcion3']."', opcion4='".$data['opcion4']."', respuesta='".$data['respuesta']."'  WHERE id_pregunta=".$data['id'];
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