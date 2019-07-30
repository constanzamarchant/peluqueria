<?php get_header() ?>
	<?php the_post() ?>

	<h3 class="gold-color my-3"><?php the_title() ?></h3>
	<?php the_content(); ?>

	<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
		<?php dynamic_sidebar( 'contact-widget' ); ?>
	<?php }; ?>

<?php get_footer() ?>
