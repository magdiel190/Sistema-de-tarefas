<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Prova</title>
		<meta charset="UTF-8">
		<script src="js/jscript.js"></script>
		<script src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="cs/css.css">
		<script src="js/alertfy.min.js"></script>
		<link rel="stylesheet" href="css/alertify.css">
		<script src="js/alertify.js"></script>
		<link rel="stylesheet" href="css/themes/semantic.css">
		<link rel="stylesheet" href="cs/microtip.css">
		<link href="pace/themes/pace-theme-barber-shop.css" rel="stylesheet" />
		<link href="cs/pace.css" rel="stylesheet" />
	</head>
	<?php
		include "conexao.php";
	?>
	<body onload="onloa()">
		<div class="position" id="afazer">
			<h1>A Fazer</h1>
			<button onclick="addfazer()">Adicionar</button>
			<div id="localizacao" name="1"></div>
			<div id="mostrar"></div>
		</div>
		<div class="position"  id="fazendo">
			<h1>Fazendo</h1>
			<button onclick="addfazendo()">Adicionar</button>
			<div id="localizacao2" name="2"></div>
			<div id="mostrar2"></div>
		</div>
		<div class="position"  id="feito">
			<h1>Feito</h1>
			<button onclick="addfeito()">Adicionar</button>
			<div id="localizacao3" name="3"></div>
			<div id="mostrar3"></div>
		</div>
		<div class="posicao" id="addfazer">
			<h2>Adicionar a Fazer</h2>
			<p>Data:</p>
			<input type="date" id="datas">
			<p>Conteudo:</p>
			<textarea id="conteudo"></textarea>
			<button id="cancelar" onclick="cancelarafazer()" aria-label = "Botão para cancelar! "  data-microtip-position = "bottom"  role = " tooltip ">Cancelar</button>
			<button id="salvar" onclick="salvarafazer()" aria-label = "Botão para Salvar! " data-microtip-position = "bottom"  role = " tooltip " >Salvar</button>
			<script>
				$("#salvar").on('click',function(){
					$.ajax({
						url: 'salvardados.php',
						type: 'POST',
						data:{
							inidatas:$("#datas").val(),
							nomeconteudo:$("#conteudo").val(),
							tipo:$("#localizacao").attr('name')
						},
						success: function(data){
							$("#mostrar").html(data);	
						},
						error: function(data){
							$("#mostrar").html("erro");
						}
					});
				});
			</script>
		</div>
		<div class="posicao" id="addfazendo">
			<h2>Adicionar Fazendo</h2>
			<p>Data:</p>
			<input type="date">
			<p>Conteudo:</p>
			<textarea id="conteudo2"></textarea>
			<button id="cancelar"  onclick="cancelarfazer()" aria-label = "Botão para cancelar! "  data-microtip-position = "bottom"  role = " tooltip ">Cancelar</button>
			<button id="salva" onclick="salvarfazendo()" aria-label = "Botão para Salvar! " data-microtip-position = "bottom"  role = " tooltip ">Salvar</button>
			<script>
				$("#salva").on('click',function(){
					$.ajax({
						url: 'salvardados.php',
						type: 'POST',
						data:{
							nomeconteudo:$("#conteudo2").val(),
							tipo:$("#localizacao2").attr('name')
						},
						success: function(data){
							$("#mostrar2").html(data);
						},
						error: function(data){
							$("#mostrar2").html("erro");
						}
					});
				});
			</script>
		</div>
		<div class="posicao" id="addfeito">
			<h2>Adicionar Feito</h2>
			<p>Data:</p>
			<input type="date">
			<p>Conteudo:</p>
			<textarea id="conteudo3"></textarea>
			<button id="cancelar" onclick="cancelarfeito()" aria-label = "Botão para cancelar! "  data-microtip-position = "bottom"  role = " tooltip ">Cancelar</button>
			<button id="salv" onclick="salvarfeito()" aria-label = "Botão para Salvar! " data-microtip-position = "bottom"  role = " tooltip ">Salvar</button>
			<script>
				$("#salv").on('click',function(){
					$.ajax({
						url: 'salvardados.php',
						type: 'POST',
						data:{
							nomeconteudo:$("#conteudo3").val(),
							tipo:$("#localizacao3").attr('name')
						},
						success: function(data){
							$("#mostrar3").html(data);
						},
						error: function(data){
							$("#mostrar3").html("erro");
						}
					});
				});
			</script>
		</div>
		<script src="js/pace.js"></script>
	</body>
</html>