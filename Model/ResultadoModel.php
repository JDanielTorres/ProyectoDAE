<?php
	include dirname(__file__,2)."/Model/Conexion.php";
	/**
	*
	*/
	class Resultado
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
		public function getResultado()
		{
			$query  ="SELECT * FROM resultados";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

				//Obtiene el resultado por id de la persona
		public function getResultadoByIdPersona($id=NULL){
			if(!empty($id)){
				$query  ="SELECT * FROM resultados WHERE id_persona=".$id;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		//Crea un nuevo resultado
		public function newResultado($data){
            $i=0;
            $resultado=0;
           $noPregunta=$data['noPregunta'];
           date_default_timezone_set('America/Mexico_City');
		   $fecha = date("d-M-Y g:i a");
		   session_start();
		   if(isset($_SESSION['id'])){
			$id_persona=$_SESSION['id'];
		}
		
           while($i<$noPregunta){
             $id=$data['id_pregunta'.$i];
             $respuesta=$data['pregunta'.$id];
             $resultado=$resultado+$respuesta;
            $i++;
               }
			$query  ="INSERT INTO resultados (id_persona, puntaje, fecha) VALUES ('".$id_persona."','".$resultado."','".$fecha."')";
			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Edita el usuario por id
		public function setEditResultado($data){
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