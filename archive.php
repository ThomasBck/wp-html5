<?php get_header(); ?>
			
<!-- wrapper -->
<div class="container">

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
