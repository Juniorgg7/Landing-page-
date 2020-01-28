<?php 
	include("config.php");

	$pdo = new PDO("mysql:host=localhost;dbname=code", "root", "");

	if(isset($_POST['enviar'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		
		$sql = $pdo->prepare("INSERT INTO `dadoscliente` VALUES (null,?,?,?)");
		$sql->execute(array($nome, $email, $mensagem));
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
	
	<section class="detalhes">
		<div class="center">
			<div class="titulo">

				<h1>Detalhes Da Empresa</h1>

			</div><!--Titulo-->

			<p>Uma empresa que cresce junto com você !</p>
			
			<div class="box-detalhes">
				
				<p>Seu site 100% responsivo em todos os tamanhos de tela !</p>
				<p>Sites desenvolvidos com as melhores tecnologias da atualidade !</p>
			
			</div><!--Box Detalhes-->
			
			<p>Se você se interessou, entre em contato clicando no botão abaixo ! Nosso lema é sempre fazer o melhor pra você.</p>
			
			<button class="btn">Contato</button>
		</div>
	</section><!--Detalhes-->
	
	
	<section class="sobre">
		
		<div class="titulo">

			<h1>Tecnologias Usadas</h1>

		</div><!--Titulo-->
		<div class="center">

			<div class="w50">

					<div class="box-tec">
						
						<i class="fab fa-html5"></i>
						<span>HTML 5</span>
						<div class="clear"></div><!--Clear-->
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
						
						
					</div><!--Box-Tec-->

					<div class="box-tec">
						
						<i class="fab fa-js-square"></i>
						<span>Javascript</span>
						<div class="clear"></div><!--Clear-->
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
						
						
					</div><!--Box-Tec-->

					<div class="box-tec">
						
						<i class="fab fa-php"></i>
						<span>PHP</span>
						<div class="clear"></div><!--Clear-->
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
						
						
					</div><!--Box-Tec-->

			</div><!--W50-->

			<div class="w50">

					<div class="box-tec">
						
						<i class="fab fa-css3"></i>
						<span>CSS 3</span>
						<div class="clear"></div><!--Clear-->
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
						
						
					</div><!--Box-Tec-->

					<div class="box-tec">
						
						<i class="fab fa-bootstrap"></i>
						<span>Bootstrap</span>
						<div class="clear"></div><!--Clear-->
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
						
						
					</div><!--Box-Tec-->

					<div class="box-tec">
						
						<i class="fab fa-java"></i>
						<span>Java</span>
						<div class="clear"></div><!--Clear-->
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
						
						
					</div><!--Box-Tec-->

			</div><!--W50-->

		</div>
	</section><!--Sobre-->
	
	<section class="formulario">
			
		<div class="titulo">

			<h1>Entre em contato</h1>

		</div><!--Titulo-->
		<h2>Informe os seus dados abaixo e entraremos em</br> contato o mais rápido possível !</h2>
		<div class="center">
		
			<div class="w50">
			
				<form method="post">
					
					<input type="text" placeholder="Nome" name="nome" required class="nome" />
					<input type="email" placeholder="Email" name="email" required class="email" />
					</br>
					<textarea placeholder="Mensagem" name="mensagem" class="mensagem" required></textarea>
					</br>
					<input type="submit" value="Enviar" name="enviar" />
					<input type="reset" value="Resetar" />
					
				</form>
				
			</div>
		
			<div class="w50">
				
				<div class="box-formulario" style="border-bottom: 0.5px solid rgba(255, 255, 255, 0.3); height: 200px">
					<i class="fas fa-home"></i>
					<span>Endereço</span>
					<div class="clear"></div><!--Clear-->
					<address>
						Untitled Corp</br>
						1234 Somewhere Rd</br>
						Nashville, TN 00000</br>
					</address>
				</div>

				<div class="box-formulario" style="border-bottom: 0.5px solid rgba(255, 255, 255, 0.3); float: right; height: 200px;">
					<i class="fas fa-comment-dots"></i>
					<span>Social</span>
					<div class="clear"></div><!--Clear-->
					<a href="#">Facebook</a>
					<a href="#">Linkedin</a>
					<a href="#">GitHub</a>
				</div>
				<div class="clear"></div>
				<div class="box-formulario bottom" style="padding: 20px 0;">
					<i class="fas fa-envelope"></i>
					<span>Email</span>
					<div class="clear"></div><!--Clear-->
					<a href="#">info@untitled.tld</a>
				</div>

				<div class="box-formulario bottom" style="padding: 20px 0;">
					<i class="fas fa-phone"></i>
					<span>Telefone</span>
					<div class="clear"></div><!--Clear-->
					<p>(000) 555-0000</p>
				</div>
				<div class="clear"></div>
			</div>
				
		</div>
		
		<footer class="rodape">
		
			<div class="center">
				
				<p>Copyright 2020 - Todos os Direitos Reservados</p>

			</div><!--Center-->

		</footer><!--Rodapé-->
	</section><!--Formulário-->
	
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
			
		});
	
	</script>
	
</body>
</html>




