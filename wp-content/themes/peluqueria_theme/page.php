<?php get_header() ?>
	<?php the_post() ?>

	<?php the_post_thumbnail('principal', array('class' => 'w-100 h-auto')); ?>
	<h3 class="gold-color my-3"><?php the_title(); ?></h3>
	<?php the_content(); ?>

<?php get_footer() ?>
