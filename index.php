<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Tarefas</title>
		<script src="js.js"></script>
		<link rel="stylesheet" href="oi.css">
		<script src="jquery.min.js"></script>
		<script src="alertfy.min.js"></script>
		<link href="pace/themes/pace-theme-barber-shop.css" rel="stylesheet" />
		<link href="pace.css" rel="stylesheet" />
		<!--<script src="preloader.js"></script>-->
		<meta charset="UTF-8">
		<!-- include alertify.css -->
		<link rel="stylesheet" href="css/alertify.css">
		<!-- include semantic ui theme  -->
		<link rel="stylesheet" href="css/themes/semantic.css">
		<!-- include alertify script -->
		<script src="alertify.js"></script>
		<link rel="stylesheet" href="microtip.css">
	</head>
	<?php
		include "conexao.php";
		
		
	?>
	<body onload="apagado()">
		<div class="posicao" id="Fazer">
			<h1>Fazer</h1><br>
			<center><input type="button" name="Editar" onclick="edt_fazer()" value="Editar">
			<input type="button" name="Adicionar" onclick="add_fazer()" value="Adicionar">
			<input type="button" name="Excluir" onclick="exc_fazer()" value="Excluir"></center>
			
		</div>
		<div  class="posicao" id="Fazendo">
			<h1>Fazendo</h1><br>
			<center><input type="button" name="Editar" onclick="edt_fazendo()" value="Editar">
			<input type="button" name="Adicionar" onclick="add_fazendo()" value="Adicionar">
			<input type="button" name="Excluir" onclick="exc_fazendo()" value="Excluir"></center>
			
		</div>
		<div class="posicao" id="Feito">
			<h1>Feito</h1><br>
			<center><input type="button" name="Editar" onclick="edt_feito()" value="Editar">
			<input type="button" name="Adicionar" onclick="add_feito()" value="Adicionar">
			<input type="button" name="Excluir" onclick="exc_feito()" value="Excluir"></center>
			
		</div>
		<!-- Editar fazer -->
		<div id="editar_fazer" class="posicao1">
			<h1>Editando Fazer</h1>
			<h4>Nome:<h4>
			<input type="text" name="nome" value="nome"></input><br>
			<h4>Prazo:<h4>
			<input type="date" name="data"></input><br>
			<h4>Conteudo:<h4>
			<textarea name="conteudo" cols="30" rows="5"></textarea>
			<button onclick="">Ok</button> <button onclick="can_editar()">Cancelar</button>
		</div>
		<!-- adicionar fazer -->
		<div id="adicionar_fazer" class="posicao1">
			<h1>Adicionar Fazer</h1>
			<h4>Nome:<h4>
			<input type="text" name="nome" value="nome"></input><br>
			<h4>Prazo:<h4>
			<input type="date" name="data"></input><br>
			<h4>Conteudo:<h4>
			<textarea name="conteudo" cols="30" rows="5"></textarea>
			<button onclick="">Ok</button> <button onclick="can_adicionar()">Cancelar</button>
		</div>
		<!--Excluir fazer -->
		<div id="excluir_fazer" class="posicao1">
			<h1>Excluir Fazer</h1>
			Tem certeza que deseja excluir...
			<button onclick="">Ok</button> <button onclick="can_excluir()">Cancelar</button>
		</div>
		<!-- Editar fazendo -->
		<div id="editar_fazendo" class="posicao1">
			<h1>Editando Fazendo</h1>
			<h4>Nome:<h4>
			<input type="text" name="nome" value="nome"></input><br>
			<h4>Prazo:<h4>
			<input type="date" name="data"></input><br>
			<h4>Conteudo:<h4>
			<textarea name="conteudo" cols="30" rows="5"></textarea>
			<button onclick="">Ok</button> <button onclick="can_editar()">Cancelar</button>
		</div>
		<!-- adicionar fazendo -->
		<div id="adicionar_fazendo" class="posicao1">
			<h1>Adicionar Fazendo</h1>
			<h4>Nome:</h4>
			<input type="text" name="nome" value="nome"></input><br>
			<h4>Prazo:</h4>
			<input type="date" name="data"></input><br>
			<h4>Conteudo:</h4>
			<textarea name="conteudo" cols="30" rows="5"></textarea>
			<button onclick="">Ok</button> <button onclick="can_adicionar()">Cancelar</button>
		</div>
		<!--Excluir fazendo -->
		<div id="excluir_fazendo" class="posicao1">
			<h1>Excluir Fazendo</h1>
			Tem certeza que deseja excluir...
			<button onclick="">Ok</button> <button onclick="can_excluir()">Cancelar</button>
		</div>
		<!--Editar feito -->
		<div id="editar_feito" class="posicao1">
			<h1>Editando Feito</h1>
			<h4>Nome:<h4>
			<input type="text" name="nome" value="nome"></input><br>
			<h4>Prazo:<h4>
			<input type="date" name="data"></input><br>
			<h4>Conteudo:<h4>
			<textarea name="conteudo" cols="30" rows="5"></textarea>
			<button onclick="">Ok</button> <button onclick="can_editar()">Cancelar</button>
		</div>
		<!-- adicionar feito -->
		<div id="adicionar_feito" class="posicao1">
			<h1>Adicionar Feito</h1>
			<h4>Nome:</h4>
			<input type="text" name="nome" value="nome"></input><br>
			<h4>Prazo:</h4>
			<input type="date" name="data"></input><br>
			<h4>Conteudo:</h4>
			<textarea name="conteudo" cols="30" rows="5"></textarea>
			<button onclick="">Ok</button> <button onclick="can_adicionar()">Cancelar</button>
		</div>
		<!--Excluir feito -->
		<div id="excluir_feito" class="posicao1">
			<h1>Excluir Feito</h1>
			Tem certeza que deseja excluir...
			<button onclick="">Ok</button> <button onclick="can_excluir()">Cancelar</button>
		</div>
		<button onclick="oi()">oioioioioio</button><br>
		<script>
		<!-- alertfy -->
			function oi(){
				alertify
				  .alert("This is an alert dialog.", function(){
					alertify.message('OK');
				  });
			}
		</script>
		<script>
			$('input').click(function(){
			var nome = document.getElementById('nome')
			var idade = document.getElementById('idade')
			var email = document.getElementById('email')
				if(email !== ''){
					var dados = {
						nome:nome,
						idade:idade,
						email:email
					};
					$.post('google.php', dados, function(retorna){
					}
				}	
				$.ajax({
					url: 'arquivo2.php',
					success: function(data) {
					$('div').html(data);
					},
					beforeSend: function(){
					},
					complete: function(){
					}
				});
			});
		</script>
		<script src="pace.js"></script>
	</body>
</html>