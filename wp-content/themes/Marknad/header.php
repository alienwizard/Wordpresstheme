<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="">
		<link rel="author" href="">
<script src="https://use.typekit.net/iat5cgp.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
		<header id="page-header">
		<div class="top-header">
			<div class="container">
			<div class="row">
			<div class="col-md-4">
			<h1 id="page-logo">
				<?php if (!is_front_page()): ?>
					<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
						<?php bloginfo('name') ?>
					</a>
				<?php else: ?>
					<span>
						<?php bloginfo('name') ?>
					</span>
				<?php endif; ?>
			</h1>
			</div>
			<div class="search col-md-4">
				<?php get_search_form(); ?>
			</div>
			<div class="loggin col-md-4">
				<a href="btn"><h3>Logga in</h3></a>
			</div>
			</div>
			</div>
			</div>
			<div class="bottom-header">
			<div class="container">
			<?php wp_nav_menu(array(
				'theme_location' => 'main-nav',
				'container'      => 'nav',
				'container_id'   => 'primary-nav'
			)) ?>
			</div>
			</div>
			<div class="clearfix"></div>
		</header>
		<div id="content-wrap">
