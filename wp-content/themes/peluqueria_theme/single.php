<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<?php the_post_thumbnail('principal', array('class' => 'w-100 h-auto')); ?>
		<h3 class="gold-color my-3"><?php the_title(); ?></h3>
		<?php the_content(); ?>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>
