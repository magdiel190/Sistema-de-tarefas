<?php
	include "conexao.php";
	$id = '';
	$data = $_POST['inidatas'];
	$conteudo = $_POST['nomeconteudo'];
	$posicao = $_POST['tipo'];
	$sql = "INSERT INTO tarefas
		(id,data, conteudo, posicao) 
		VALUES
		('$id', '$data','$conteudo','$posicao')";
	$tarefa = $taref -> prepare($sql);
	$tarefa -> execute();
	$taref = NULL;
?>