<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first-wp-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/ab3130ba7b.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid" id="page" class="site">
	<div class="header row">
		<div class="header-nav-text container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto">
						<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#">About Us</a>
						<a class="nav-item nav-link" href="#">Production</a>
						<a class="nav-item nav-link" href="#">Products</a>
						<a class="nav-item nav-link" href="#">Contact</a>
					</div>
				</div>
			</nav>
			<div class="header-text text-center text-md-left">
				<h1>Otpresci za stolice</h1>
				<hr class="hr mx-auto m-md-0">
				<p>Nudimo kvalitetan i raznovrsan<br> asortiman poluproizvoda za izradu stolica,<br> sedišta, rukonaslone, školjke, itd.</p>
				<button type="button" class="btn btn-outline-dark">Proizvodi</button>
			</div>
		</div>
	</div>

	<div id="content" class="site-content">