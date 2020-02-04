<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto PHP</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/all.min.css">
	<script src="js/all.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>icon2.ico" type="image/x-icon"/>
	<meta charset="utf-8">
	
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>"/>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
			    echo '<target="depoimentos"/>';
				break;
			case 'servicos':
				echo '<target="servicos"/>';
				break;
		}
	?>

	<header>
		<div class="center">
			<div class="logo left"><a href="/">logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->	
	</div><!--center-->
	</header>
	
	<div class="container-principal">
	<!--Carregando o site dinamicamente com PHP-->
	<?php
		
		if (file_exists('pages/'.$url.'.php')) {
			 include('pages/'.$url.'.php');
		}else{
			if ($url != 'depoimentos' && $url != 'servicos'){
				
			//Podemos fazer o que quiser, pois a página não existe!
			$pagina404 = true;
			include('pages/404.php');

			}else{
				include('pages/home.php');
			}
		}

	?>
	</div><!--container-principal-->	

	<footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>JetBrains Systems - Todos os direitos reservados 2020.</p>
		</div><!--center-->
	</footer>

		<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
		<script src='http://maps.googleapis.com/maps/api/js?v=3.exp&Key=AIzaSyCSCJMyQCpHxJQ83z8BqT6udaXPzcOCbUY'></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
		<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
		<?php
			if ($url == 'home' || $url == '') {
		?>
		<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
		<?php } ?>
		<?php
			if ($url == 'contato') {
		?>
		<?php } ?>
		<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
</body>
</html>