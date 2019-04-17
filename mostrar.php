<?php
	include "conexao.php";
	$sql = "SELECT * FROM tarefas";
	$tarefa = $taref -> prepare($sql);
	$tarefa -> execute();
	$taref = NULL;
	foreach($tarefa as $tare){
		//capitura dos valores
		$id = $tare["id"];
		$data = $tare["data"];
		$conteudo = $tare["conteudo"];
		$posicao = $tare["posicao"];
		//mostrando valores em uma tabela
		echo .$conteudo.;
		echo .date("d/m/Y",strtotime($data)).;
		echo "
			<a href='' title='Editar $nome'>
				<img src='lapis.jpg' width='25px'>
			</a>";
		echo"
			<a href='agenda_excluir.php?id=$id&nome=$nome' title='Excluir $nome'>
				<img src='lixeira.png' width='25px'>
			</a>";
	}
?>