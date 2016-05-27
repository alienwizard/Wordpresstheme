<?php get_header(); ?>
<div class="banner parallax-window" data-parallax="scroll" data-image-src='http://megamarknad.mediahelpcrm.se/wp-content/uploads/2016/05/backgorund-market-slimer.jpg'>
<div id="container" class="container">
	<div class="bannerbox">
	<h1 class="title">Marknadsplatsen för dig</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

</div>

</div>

<div class="container">
<div class="page-content">

<div class="row">
	<div class="col-md-12 col-sm-12 ">
	
		<?php get_template_part('loop', 'home'); ?>

	</div>

	</div>
</div>
</div>

<script type="text/javascript">

jQuery('.banner').load(function ($) {
	console.log($(window).height());
	$('.banner').height($(window).height() -123);
});



</script>
	<?php get_footer();?>