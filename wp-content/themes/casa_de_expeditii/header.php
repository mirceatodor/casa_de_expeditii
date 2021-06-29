<!doctype html>         
<html <?php language_attributes(); ?>>    <!--aici deschid markupu html si mai jos body, si le inchid in footer -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>       <!--returneaza tot felu de functii utile pe care le are WP-->
</head>

<body <?php body_class(); ?>> <!--pune pe body diverse clase in functie de pagina pe care este focusul-->
<?php wp_body_open(); ?>      <!--un loc unde pot alte plug-inuri sa injecteze cod-dupa ce body a fost deschis-->

<header class="header">       <!-- markup-ul pt header (un link, un a si  ul) --> 
	<div class="container">
	    <a href="/"><img src="<?= get_stylesheet_directory_uri() . "/images/memologoblack.png" ?>" /></a>
		<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Despre noi</a></li>
		<li><a href="#">Servicii</a></li>
		<li><a href="#">Rute</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Galerie</a></li>
		<li><a href="#">Contact</a></li>
		</ul>
    </div>
</header>       