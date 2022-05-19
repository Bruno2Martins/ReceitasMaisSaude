<html>

	<head>
	
		<meta charset = 'UTF-8'>		
		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="CSS/ESTILO.css">
			
		<link rel="stylesheet" href="CSS/FONTE.css">

		<script src="funcoes.js"></script>
		
		<style>
		
			body, html {height: 100%}
			
			body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}	
			
			img {
				float:center;
				border-radius: 10px;
				padding: 5px;
				max-width: 100%;
			}
			.col {
			  float: left;
			  width: 33.3%;
			  margin-bottom: 16px;
			  padding: 0 8px;
			}

			@media screen and (max-width: 650px) {
			  .col {
				width: 100%;
				display: block;
			  }
			}

			.card {
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			}

			.container {
			  padding: 0 16px;
			}

			.container::after, .row::after {
			  content: "";
			  clear: both;
			  display: table;
			}

			button {
			  border: none;
			  outline: 0;
			  display: inline-block;
			  padding: 8px;
			  color: white;
			  background-color: #000;
			  text-align: center;
			  cursor: pointer;
			  width: 100%;
			}
			.ponto{
				border-radius: 10px;
				padding: 5px;
				width: 15%;
			}
		</style>
		
	</head>
	
	<body>
	
		<div class="w3-content">
		
			<form method="post" name="form" action="AReceita.php" >
			
			

			<?PHP
				$conexao = mysqli_connect('localhost','root','');
				$banco = mysqli_select_db($conexao,'saudereceitas');
				mysqli_set_charset($conexao,'utf8');

				
				$sql = mysqli_query($conexao,"select * from receitas where tipo='3'") or die("Erro");
				while($dados=mysqli_fetch_assoc ($sql))
				{
				
					$id = $dados['id'];
					$str = $dados['titulo'];
					$url = "'./AReceita.php'";
					$div = "";
					$img = $dados['foto'];
						echo "<div class='col'>
								<div class='card'>
									<button class='w3-button w3-xxlarge' type='submit' value='$id' name='nome' onClick=javascript:abre($url,$div);>
										<b>
											<br/>
											".nl2br($str)."<br/>
										</b>
										<img src='fotos/".$img."' alt='IMAGEM'>
										<div class='conteiter'>
											<h2>Avaliação Geral:<br/>
												<a href='javascript:void(0)' onclick='Avaliar(1)'>
												<img src='img/cutlery.png' class='ponto' id='s1'></a>

												<a href='javascript:void(0)' onclick='Avaliar(2)'>
												<img src='img/cutlery.png' class='ponto' id='s2'></a>

												<a href='javascript:void(0)' onclick='Avaliar(3)'>
												<img src='img/cutlery.png' class='ponto' id='s3'></a>

												<a href='javascript:void(0)' onclick='Avaliar(4)'>
												<img src='img/cutlery.png' class='ponto' id='s4'></a>

												<a href='javascript:void(0)' onclick='Avaliar(5)'>
												<img src='img/cutlery.png' class='ponto' id='s5'></a>
											</h2>
											<h1>
											</button>
										</h1>
									</div>
								</div>	
							</div>";
				}
			?>
			
			</form>
			
		</div>
		
	</body>
	
</html>