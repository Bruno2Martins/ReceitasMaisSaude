<!DOCTYPE html>

<html>
	<head>
		<title> + SAÚDE </title>
		
		<meta charset="UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="CSS/ESTILO.css">
		
		<link rel="stylesheet" href="CSS/FONTE.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		
		<script src="js/funcoes.js"></script>

		<?PHP
			$conexao = @mysqli_connect('localhost','root','');
			$banco = @mysqli_select_db($conexao,'saudereceitas');
			mysqli_set_charset($conexao,'utf8');
		?>
		
		<style>
		
			body, html {height: 100%}
			
			body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
			
			.menu {display: none}
			
			/* width */
			::-webkit-scrollbar {
			  width: 20px;
			}

			/* Track */
			::-webkit-scrollbar-track {
			  box-shadow: inset 0 0 5px grey; 
			  border-radius: 10px;
			}
			 
			/* Handle */
			::-webkit-scrollbar-thumb {
			  background: red; 
			  border-radius: 10px;
			}

			/* Handle on hover */
			::-webkit-scrollbar-thumb:hover {
			  background: #b30000; 
			}
			
			
			.bgimg {
				
				background-repeat: no-repeat;
				
				background-size: cover;
				
				background-image: url("img/CAPS.JPG");
				
				min-height: 100%;
			
			}
			
			.miniatura {
				
				height: 75px;
				
				border: 1px solid #000;
				
				margin: 10px 5px 0 0;
			  }
			  
			.imagem {
				
				max-width:40%;
				
				max-height:30%;
				
				width: auto;
				
				height: auto;
			
			}
			
		</style>
		
	</head>
	
	<body>

		<!-- Navbar (sit on top) -->
		
		<div class="w3-top w3-hide-small">
			
			<div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
				
				<a href="#" class="w3-bar-item w3-button">HOME</a>
				
				<a href="#receitas" class="w3-bar-item w3-button">RECEITAS</a>
				
				<a href="#sobre" class="w3-bar-item w3-button">SOBRE</a>
				
				<a href="#suaReceita" class="w3-bar-item w3-button">SUA RECEITA</a>
			
			</div>
		
		</div>
		  
		<!-- Header with image -->
		
		<header class="bgimg w3-display-container w3-grayscale-min" id="home">
			
			<div class="w3-display-bottomleft w3-padding">
				
				<span class="w3-tag w3-xlarge">+ SAÚDE</span>
			
			</div>
			
			<div class="w3-display-middle w3-center">
				
				<span class="w3-text-white w3-hide-small" style="font-size:150px;text-shadow: 4px 4px 1px #000000;"><br>+SAÚDE</span>
				
				<span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>+SAÚDE</b></span>
				
				<p><a href="#receitas" class="w3-button w3-xxlarge w3-black">IR PARA RECEITAS</a></p>
			
			</div>
		
		</header>

		<!-- Menu Container -->
		
		<div class="w3-container w3-black w3-padding-32 w3-xxlarge" id="receitas">
			
			<form method="post" name="form" action="AReceita.php">
		
				<div class="w3-content">
			  
					<h1 class="w3-center w3-jumbo" style="margin-bottom:64px">RECEITAS</h1>
					
					<div class="w3-row w3-center w3-border w3-border-dark-grey">
						
						<a href="javascript:void(0)" value='1' class='tipoo' onclick="openMenu(event, 'SALGADOS');" id="myLink">
						
							<div class="w3-col s4 tablink w3-padding-large w3-hover-red"><b>SALGADOS</b></div>
						
						</a>
						
						<a href="javascript:void(0)" value='2' class='tipoo' onclick="openMenu(event, 'DOCES');">
							
							<div class="w3-col s4 tablink w3-padding-large w3-hover-red"><b>DOCES</b></div>
						
						</a>
						
						<a href="javascript:void(0)" value='3' class='tipoo' onclick="openMenu(event, 'SUCOS');">
							
							<div class="w3-col s4 tablink w3-padding-large w3-hover-red"><b>SUCOS</b></div>
						
						</a>
						
					</div>
					
					<div id="SALGADOS" class="w3-container menu w3-padding-32 w3-white " >
					
						<iframe name='conteudo'height='520' width='100%' allowtransparency='true' style='background-color:transparent' frameborder='0' src='divSalg.php'></iframe>
						
					</div>

					<div id="DOCES" class="w3-container menu w3-padding-32 w3-white">
						
						<iframe name='conteudo' height='520' width='100%' allowtransparency='true' style='background-color:transparent' frameborder='0' src='divDoce.php'></iframe>
						
					</div>

					<div id="SUCOS" class="w3-container menu w3-padding-32 w3-white">
						
						<iframe name='conteudo'height='520' width='100%' allowtransparency='true' style='background-color:transparent' frameborder='0' src='divSuco.php'></iframe>
						
					</div><br>

				</div>
				
			</form>
		
		</div>
		
		<!-- Enviar Receita -->
		
		<div id="suaReceita" class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
			
			<div class="w3-content">
				
				<h1 class="w3-center w3-jumbo" style="margin-bottom:64px" >SUA RECEITA</h1>
				
				<p><span class="w3-tag">HEY!</span> Envie aqui a sua receita para que todos possam ver.</p>
				
				<p class="w3-xxlarge"><strong><center>Envie</strong> sua receita:</center></p>
				
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="cadastro" >
					
					
					<p><input autocomplete="off" class="w3-input w3-padding-16 w3-border" type="text" placeholder="Título da Receita" required name="Titulo"></p>
					
					<p><textarea autocomplete="off" style="resize: none" name="Ingredientes" class="w3-input w3-padding-16 w3-border" placeholder="Ingredientes"></textarea></p>
					
					<p><textarea autocomplete="off" style="resize: none" name="Preparo" class="w3-input w3-padding-16 w3-border" placeholder="Modo de preparo"></textarea></p>
					
					<p><input autocomplete="off" class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome do Autor" required name="Nome"></p>
						
						<input autocomplete="off" required type="radio" name="tipo" value="1" checked> Salgado
						
						<input autocomplete="off" required type="radio" name="tipo" value="2"> Doce
						
						<input autocomplete="off" required type="radio" name="tipo" value="3" > Suco
						
					<p>Adicione uma foto da sua receita<br><input autocomplete="off" type="file" required name="foto" id="addFotoGaleria"/></p>
					<div class="galeria"></div>
					
					<p><button class="w3-button w3-light-grey w3-block" type="submit" name="envia">ENVIAR</button></p>
				
				</form>
			
			</div>
		
		</div>

		<!-- Container Sobre -->
		
		<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xxlarge" id="sobre">
			
			<div class="w3-content">
				
				<h1 class="w3-center w3-jumbo" style="margin-bottom:64px">SOBRE</h1>
				
				<p>Aqui você encontra receitas de salgados, doces e sucos para variar seu cardápio! Conheça o +Saúde e descubra um monte de opções de dar água na boca.</p>
				
				<p><strong>Criadores?</strong><img src='img/group.png' class="imagem w3-hide-small" style="float:right" alt='Imagem' /></p>
				
				
				
				<p>Bruno Martins</p>
				
				<p>Hendrio Alexandre Vardenski Prado</p>
				
				<p>Jefferson Murilo Vergilio de Oliveira</p>
			
		  </div>
		
		</div>

		<!-- Footer -->
		
		<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
			
			<p>CONTATO.TCC2019@GMAIL.COM</p>
		
		</footer>

		<script>
		
			// Tabbed Menu
			
			function openMenu(evt, menuName) {
				
				var i, x, tablinks;
				
				x = document.getElementsByClassName("menu");
				
				for (i = 0; i < x.length; i++) {
				
					x[i].style.display = "none";
				
				}
				
				tablinks = document.getElementsByClassName("tablink");
				
				for (i = 0; i < x.length; i++) {
					
					tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
				
				}
				
				document.getElementById(menuName).style.display = "block";
				
				evt.currentTarget.firstElementChild.className += " w3-red";
				
				
			}
			
			document.getElementById("myLink").click();
			
			
			$(function() {
				// Pré-visualização de várias imagens no navegador
				var visualizacaoImagens = function(input, lugarParaInserirVisualizacaoDeImagem) {

					if (input.files) {
						var quantImagens = input.files.length;

						for (i = 0; i <= 1; i++) {
							var reader = new FileReader();

							reader.onload = function(event) {
								$($.parseHTML('<img class="miniatura">')).attr('src', event.target.result).appendTo(lugarParaInserirVisualizacaoDeImagem);
							}

							reader.readAsDataURL(input.files[i]);
						}
					}

				};

				$('#addFotoGaleria').on('change', function() {
					visualizacaoImagens(this, 'div.galeria');
				});
			});
		
			
			
		</script>

		<?PHP
		
		// Se o usuário clicou no botão cadastrar efetua as ações
		if (isset($_POST['envia'])) {
			// Recupera os dados dos campos
			$nome = $_POST["Nome"];
			$titulo = $_POST["Titulo"];
			$ingredientes = $_POST["Ingredientes"];
			$preparo = $_POST["Preparo"];
			$tipo = $_POST["tipo"];
			$foto = $_FILES["foto"];
			
			// Se a foto estiver sido selecionada
			if (!empty($foto["name"])) {
				
				// Largura máxima em pixels
				$largura = 2000;
				// Altura máxima em pixels
				$altura = 2000;
				// Tamanho máximo do arquivo em bytes
				$tamanho = 100000000000;

				$error = array();

				// Verifica se o arquivo é uma imagem
				if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
				   $error[1] = "Isso não é uma imagem.";
				} 
			
				// Pega as dimensões da imagem
				$dimensoes = getimagesize($foto["tmp_name"]);
			
				// Verifica se a largura da imagem é maior que a largura permitida
				if($dimensoes[0] > $largura) {
					$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
				}

				// Verifica se a altura da imagem é maior que a altura permitida
				if($dimensoes[1] > $altura) {
					$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
				}
				
				// Verifica se o tamanho da imagem é maior que o tamanho permitido
				if($foto["size"] > $tamanho) {
					$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
				}

				// Se não houver nenhum erro
				if (count($error) == 0) {
				
					// Pega extensão da imagem
					preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

					// Gera um nome único para a imagem
					$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

					// Caminho de onde ficará a imagem
					$caminho_imagem = "fotos/" . $nome_imagem;

					// Faz o upload da imagem para seu respectivo caminho
					move_uploaded_file($foto["tmp_name"], $caminho_imagem);
				
					// Insere os dados no banco
					$sql = mysqli_query($conexao,"INSERT INTO receitas VALUES('','".$tipo."','".$titulo."', '".$ingredientes."', '".$preparo."','".$nome."','".$nome_imagem."')");
					// Se os dados forem inseridos com sucesso
					if ($sql){
						?> 
						<script>alert ("Sucesso");</script>
						<?PHP
						
					}
					else{
						?> 
						<script>alert ("Desculpe houve um erro no envio");</script>
						<?PHP
					}
				}
					
					// Se houver mensagens de erro, exibe-as
					if (count($error) != 0) {
						foreach ($error as $erro) {
							echo $erro . "<br />";
						}
					}
				}
			
				// Se houver mensagens de erro, exibe-as
				if (count($error) != 0) {
					foreach ($error as $erro) {
						echo $erro . "<br />";
					}
				}
		}
		
	
		?>
		
	</body>
	
</html>
