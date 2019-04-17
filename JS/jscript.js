		function onloa(){
			document.getElementById('addfazer').style.display = "none";
			document.getElementById('addfazendo').style.display = "none";
			document.getElementById('addfeito').style.display = "none";
		}
		function addfazer(){
			document.getElementById('addfazer').style.display = "block";
		}
		function addfazendo(){
			document.getElementById('addfazendo').style.display = "block";
		}
		function addfeito(){
			document.getElementById('addfeito').style.display = "block";
		}
	<!-- alertfy cancelar a fazer -->
		function cancelarafazer(){
			alertify.confirm("Cancelar adicionar a fazer!",
			function(){
				alertify.success('Ok');
				document.getElementById('addfazer').style.display = "none";
			},
			function(){
				alertify.error('Cancel');
			});
		}
	<!-- alertfy cancelar fazendo -->
		function cancelarfazer(){
			alertify.confirm("Cancelar adicionar fazendo!",
			function(){
				alertify.success('Ok');
				document.getElementById('addfazendo').style.display = "none";
			},
			function(){
				alertify.error('Cancel');
			});
		}
	<!-- alertfy cancelar feito -->
		function cancelarfeito(){
			alertify.confirm("Cancelar adicionar feito!",
			function(){
				alertify.success('Ok');
				document.getElementById('addfeito').style.display = "none";
			},
			function(){
				alertify.error('Cancel');
			});
		}
	<!-- alertfy salvar a fazer -->	
		function salvarafazer(){
			alertify.confirm("Salvar em Fazer!",
			function(){
				alertify.success('Ok');
				document.getElementById('addfazer').style.display = "none";
			},
			function(){
				alertify.error('Cancel');
				document.getElementById('addfazer').style.display = "none";
			});
		}
	<!-- alertfy salvar fazendo -->	
		function salvarfazendo(){
			alertify.confirm("Salvar em Fazendo!",
			function(){
				alertify.success('Ok');
				document.getElementById('addfazendo').style.display = "none";
				
			},
			function(){
				alertify.error('Cancel');
				document.getElementById('addfazendo').style.display = "none";
			});
		}
	<!-- alertfy salvar feito -->	
		function salvarfeito(){
			alertify.confirm("Salvar em Feito!",
			function(){
				alertify.success('Ok');
				document.getElementById('addfeito').style.display = "none";
			},
			function(){
				alertify.error('Cancel');
				document.getElementById('addfeito').style.display = "none";
			});
		}