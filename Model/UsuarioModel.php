<?php
	include dirname(__file__,2)."/Model/Conexion.php";
	/**
	*
	*/
    class Usuario
	{
		//variables para conexion DB
		private $conn;
		private $link;

		function __construct()
		{
			$this->conn   = new Conexion();
			$this->link   = $this->conn->conectarse();
		}

				//Obtiene el usuario por nombre
		public function getUsuarioByName($id=NULL){
			if(!empty($id)){
				$query  ="SELECT * FROM persona WHERE nombre = ".$id;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
        }
        
        public function getUsuarioById($id=NULL){
			if(!empty($id)){
				$query  ="SELECT * FROM usuario WHERE id_usuario=".$id;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		
		//Edita el usuario por id
		public function setEditPersona($data){
			if(!empty($data['id'])){
				$query  ="UPDATE persona SET nombres='".$data['nombres']."', apellidos='".$data['apellidos']."', curp='".$data['curp']."', tel='".$data['tel']."', email='".$data['email']."', pass='".$data['pass']."', estado='".$data['estado']."', ciudad='".$data['ciudad']."'  WHERE id=".$data['id'];
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