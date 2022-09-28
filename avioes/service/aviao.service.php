<?php

class AviaoService {
	private $conexao; 
	private $aviao;
   
    public function __construct( 
	Aviao $aviao, Conexao $conexao){
	$this->conexao = $conexao->conectar(); 
	$this->aviao  = $aviao;
	}
	
	public function inserir (){
		$query = 'insert into aviao
		(modelo, prefixo,marca, classificacao, capacidade)value(?,?,?,?,?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue (1,$this->aviao->__get('modelo'));
		$stmt->bindValue (2,$this->aviao->__get('prefixo'));
		$stmt->bindValue (3,$this->aviao->__get('marca'));
		$stmt->bindValue (4,$this->aviao->__get('classificacao'));
		$stmt->bindValue (5,$this->aviao->__get('capacidade'));
		
		$stmt->execute();
	}

	public function recuperar (){
		$query = 'select id, modelo, prefixo, marca, classificacao, capacidade from aviao';
		$stmt = $this->conexao->prepare($query);
		
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}
	public function recuperarAviao($id){
		$query = 'select id, modelo, prefixo,marca, classificacao, capacidade from aviao where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue (1,$id);
		$stmt->execute();
		return $stmt->fetchALL(PDO::FETCH_OBJ);
	}

	public function alterar (){
		$query = 'update aviao set modelo=?, prefixo =?, marca=?, classificacao=?, capacidade=? where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue (1,$this->aviao->__get('modelo'));
		$stmt->bindValue (2,$this->aviao->__get('prefixo'));
		$stmt->bindValue (3,$this->aviao->__get('marca'));
		$stmt->bindValue (4,$this->aviao->__get('classificacao'));
		$stmt->bindValue (5,$this->aviao->__get('capacidade'));
		
		$stmt->execute();
	}
	public function remover (){
		$query = 'delete from aviao where id=?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue (1,$this->aviao->__get('id'));
		
		$stmt->execute();
	}
}
