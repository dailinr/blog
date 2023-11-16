<?php

class Articulo{

    private $conn; 
    private $table = 'articulos'; 
	
	public $id;
	public $titulo;
	public $imagen;
	public $texto;
	public $fecha_creacion;
	
	public function __construct($db){
		
		$this->conn = $db; 
	}
	
	// metodo para obtener los articulos
	public function leer(){
		
		$query = 'SELECT id, titulo, imagen, texto, fecha_creacion FROM '. $this->table ;
		
		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		$articulos = $stmt->fetchAll(PDO::FETCH_OBJ); 

		return $articulos;
	}

	public function leer_individual($id){
		
		$query = 'SELECT id, titulo, imagen, texto, fecha_creacion FROM '. $this->table . ' WHERE id = ? LIMIT 0,1';
	
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $id);

		$stmt->execute();

		$articulos = $stmt->fetch(PDO::FETCH_OBJ); 

		return $articulos;
	}

	public function crear($titulo, $newImageName, $texto){
		
		$query = 'INSERT INTO ' . $this->table . ' (titulo , imagen , texto)VALUES(:titulo , :imagen , :texto)'; 

		$stmt = $this->conn->prepare($query); 

		$stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR); 
		$stmt->bindParam(":imagen", $newImageName, PDO::PARAM_STR);
		$stmt->bindParam(":texto", $texto, PDO::PARAM_STR);

		// Ejecutar query
		if($stmt->execute()){
			return true;
		}

		// Si hay un error
		printf("error $s\n", $stmt->error);
		
	}

	
}


?>