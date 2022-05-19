<html>
	<head>
		<meta charset = 'UTF-8'>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
		<link rel="stylesheet" href="CSS/ESTILO.css">
			
		<link rel="stylesheet" href="CSS/FONTE.css">

		<script src="funcoes.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
			<style>
			
				body, html {height: 100%}
				
				body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}		
				
				.ponto{
				border-radius: 10px;
				padding: 5px;
				width: 60px;
				}
				.estrelas input[type=radio] {
				  display: none;
				image: url("img/cutlery.png");

				}
				.estrelas label i.fa:before {
				  content:'\f005';
				  color: #FC0;
				image: url("img/cutlery(1).png");
				}
				.estrelas input[type=radio]:checked ~ label i.fa:before {
				  color: #CCC;
				image: url("img/cutlery.png");
				}
			</style>
	</head>
	<body>
		<a class="w3-button w3-xxlarge w3-right" href="javascript:history.go(-1)" target="conteudo" ><b>Voltar</b></a>
		<?PHP
			$rec = $_POST["nome"];
			
			 
			# PHP 7
			$conexao = mysqli_connect('localhost','root','');
			$banco = mysqli_select_db($conexao,'saudereceitas');
			mysqli_set_charset($conexao,'utf8');

			$sql = mysqli_query($conexao,"SELECT * FROM receitas WHERE id='$rec'") or die("Erro");
			while($dados=mysqli_fetch_assoc ($sql))
			{
				$str = $dados['titulo'].'<br>';
				echo '<h1><b>'.nl2br($str).'</b>';
			
				$str = $dados['foto'];
				// Exibimos a foto
				echo "<img src='fotos/".$str."' alt='Foto de exibição' /><br />";
			
				$str = $dados['ingredientes'].'<br>';
				echo '<p class="w3-text-dark-grey"><b>Ingredientes</b><br>'.nl2br($str);
				
				$str = $dados['preparo'].'<br><br>';
				echo '<b>Modo de preparo</b><br>'. nl2br($str);
				
				$str = $dados['nome'].'<br>';
				echo 'por '.nl2br($str).'</p></h1>';
				//https://pt.stackoverflow.com/questions/70484/vota%C3%A7%C3%A3o-em-estrela-com-input-radio-javascript-css
				echo "
				<h2>Avalie essa receita:<br/>
				<div class='estrelas'>
					<input type='radio' id='cm_star-empty' name='fb' value='' checked/>
					<label for='cm_star-1'><i class='fa'></i></label>
					<input type='radio' id='cm_star-1' name='fb' value='1'/>
					<label for='cm_star-2'><i class='fa'></i></label>
					<input type='radio' id='cm_star-2' name='fb' value='2'/>
					<label for='cm_star-3'><i class='fa'></i></label>
					<input type='radio' id='cm_star-3' name='fb' value='3'/>
					<label for='cm_star-4'><i class='fa'></i></label>
					<input type='radio' id='cm_star-4' name='fb' value='4'/>
					<label for='cm_star-5'><i class='fa'></i></label>
					<input type='radio' id='cm_star-5' name='fb' value='5'/>
				</div>
				</h2>
				<h2 >
				Total de Avaliações: 0
				</h2>
				";
				
			}
		?>
		
		<center><a class="w3-button w3-xxlarge w3-black" href="javascript:history.go(-1)" >Veja outras receitas</a></center>
	</body>
</html>