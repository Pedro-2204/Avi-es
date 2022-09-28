<?php
require "service/aviao.service.php";
require "model/aviao.model.php";
require "conexao/conexao.php";

@$acao = isset($_GET['acao']) ? $_GET["acao"] : $acao;
@$id = isset($_GET['id']) ? $_GET["id"] : $id;

if ($acao == 'inserir') {
	$aviao = new Aviao();
	$aviao->__set('modelo', $_POST['modelo']);
	$aviao->__set('prefixo', $_POST['prefixo']);
	$aviao->__set('marca', $_POST['marca']);
	$aviao->__set('classificacao', $_POST['classificacao']);
	$aviao->__set('capacidade', $_POST['capacidade']);

	$conexao = new Aviao();

	$aviaoService = new AviaoService($aviao, $conexao);
	$aviaoService->inserir();
	header('location: index.php');
} else if ($acao == 'recuperar') {
	$aviao = new Aviao();
	$conexao = new Conexao();

	$aviaoService = new AviaoService($aviao, $conexao);
	$aviao = $aviaoService->recuperar();
} else if ($acao == 'recuperarAviao') {
	$aviao = new Aviao();
	$conexao = new Conexao();

	$aviaoService = new AviaoService($aviao, $conexao);
	$aviao = $aviaoService->recuperarAviao($id);
} else if ($acao == 'alterar') {
	$aviao = new Aviao();
	$aviao->__set('id', $_POST['id']);
	$aviao->__set('modelo', $_POST['modelo']);
	$aviao->__set('marca', $_POST['marca']);
	$aviao->__set('prefixo', $_POST['prefixo']);
	$aviao->__set('classificacao', $_POST['classificacao']);
	$aviao->__set('capacidade', $_POST['capacidade']);

	$conexao = new Conexao();

	$aviaoService = new AviaoService($aviao, $conexao);
	$aviaoService->alterar();
	header('location: index.php');
} else if ($acao = 'remover') {
	$aviao = new Aviao();
	$conexao = new Conexao();
	$aviao->__set('id', $_POST['id']);
	$aviaoService = new AviaoService($aviao, $conexao);
	$aviaoService->remover();
	header('location: index.php');
}
