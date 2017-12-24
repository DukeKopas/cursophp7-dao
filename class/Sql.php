<?php 

class Sql extends PDO { // herda a classe PDO que é uma classe nativa.
	private $conn; 

	public function __construct(){

		$this->conn = new PDO ("mysql:host=localhost;dbname=dbphp7", "root", ""); //poderia nesse caso ser passado por métodos seters

	}

	private function setParams($statement, $parameters = array()){

			foreach ($parameters as $key => $value) {

				$this->setParam($statement, $key, $value);
		}

	}

	private function setParam($statement, $key, $value){// realiza o bindparam de um elemento

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){ //$rawQuery são comandos SQL que serão recebidos e $params serão os parâmetros, os dados que vamos receber para serem executados juntos com o comando que vier na rawQuery.
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = array()):array{
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

 ?>