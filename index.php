<?php 
	include("config.php");
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	$pdo = new PDO("mysql:host=localhost;dbname=code", "root", "");

	if(isset($_POST['enviar'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		
		$sql = $pdo->prepare("INSERT INTO `dadoscliente` VALUES (null,?,?,?)");
		$sql->execute(array($nome, $email, $mensagem));
		
		echo '<div class="poppup">Dados enviados com sucesso !</div>';
		
	}
?>

<!doctype html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">
	<meta name="author" content="Genivaldo Júnior" />
	<meta name="Description" content="Venha desenvolver seu site com a gente" />
	<meta name="Keywords" content="desenvolvimento de site, desenvolvimento, web, code" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link href="<?php echo COMMAND_PATH; ?>estilo/all.css" rel="stylesheet"> <!--load all styles -->	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo COMMAND_PATH; ?>estilo/style.css" />
	<title>Code.com.br</title>
	
</head>

<body>
	<header class="topo">
		
		<div class="center">
	
			<nav class="desktop">

				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Detalhes</a></li>
					<li><a href="#">Tecnologias</a></li>
					<li><a href="#">Contato</a></li>
				</ul>

			</nav><!--Desktop-->
			
			<nav class="mobile">
				<i class="fas fa-bars"></i>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Detalhes</a></li>
					<li><a href="#">Tecnologias</a></li>
					<li><a href="#">Contato</a></li>
				</ul>

			</nav><!--Mobile-->

			<div class="titulo">

				<h1><a href="index.php" target="_parent">Code Velocity</a></h1>
				<p>Entre em contato com a gente</p>

			</div><!--Titulo-->
		</div><!--Center-->
		
	</header><!--Topo-->
	
	<?php 

		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
		}else {
			if ($url != 'Home') {

				include('pages/404.php');
	
			}else {
				include('pages/home.php');
			}
		}

	 ?>

	
	<footer class="rodape">
		
		<div class="center">

			<p>Copyright 2020 - Todos os Direitos Reservados</p>

		</div><!--Center-->

	</footer><!--Rodapé-->
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var iconeMobile = $('.mobile i');
			var verificacao = true;
			
			$('.nome, .email, .mensagem').focus(function(){
				$(this).css('background-color', '#fff');
				$(this).css('transition-property', 'all');
				$(this).css('transition-duration', '0.5s');
			});	

			$('.nome, .email, .mensagem').blur(function(){
				$(this).css('background-color', '#ccc');
			});
			
				
			function abrirMenuMobile() {	
				iconeMobile.css('position', 'relative').css('left', '200px');
				$('.mobile ul').fadeIn(100);
				verificacao = false;
			}
			
			function fecharMenuMobile(){
				iconeMobile.css('position', 'relative').css('left', '0px');
				$('.mobile ul').fadeOut(100);
				verificacao = false;
			}
			
			iconeMobile.click(function(){
				if(verificacao === true) {
					abrirMenuMobile();
					verificacao = false;
				}else {
					fecharMenuMobile();
					verificacao = true;
				}
				
			});
			
			<?php
				echo '$( ".poppup" ).slideDown(500);';
				echo 'setTimeout(function(){
						$( ".poppup" ).fadeOut(1000);
					  }, 4000);'
			?>
		
		});
	
	</script>
	
</body>
</html>




