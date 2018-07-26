<!DOCTYPE html>
<html>
<head>
	<title>Tema Personalizado</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

</head>
<body>


<div class="container">
	<img width="70" src="<?php bloginfo('template_url'); ?>/img/logo.png" />
</div>

<header>

	<div class="container">
		<h1>VENHA PARA NOSSA ACADEMIA</h1>
	</div>
</header>


<?php $defaults = array(
    'menu'            => 'primary',
    'container'       => 'nav',
    'menu_class'      => 'menu-principal'
);


?>
 <nav class="menu">
 	<div class="container">
		<?php wp_nav_menu( $defaults ); ?>

	</div>
</nav>

<div class="container">








