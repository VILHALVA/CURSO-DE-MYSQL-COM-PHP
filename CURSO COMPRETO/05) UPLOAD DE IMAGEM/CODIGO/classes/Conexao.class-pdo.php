<?php

class Conexao{
	private $usuario;
	private $senha;
	private $servidor;
	private $banco;
	private static $pdo;
	
	public function __construct(){
		$this->servidor = "localhost";
		$this->banco = "aula";
		$this->usuario = "root";
		$this->senha = "";
	}
	
	public function conectar(){
		try{
			if(is_null(self::$pdo)){
				self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
			}
			return self::$pdo;
		}catch(PDOException $ex){
			echo 'Error: '.$ex->getMessage();
		}
	}
	
}

?>