<?php get_header() ?>
	<?php the_post() ?>
	<h3 class="gold-color my-3"><?php the_title(); ?></h3>

  <?php
    $arg = array(
      'post_type'       => 'post',
      'posts_per_page'  => 9,
      'paged'           => $paged,
      'order'           => 'title'
    );
  
    $get_arg = new WP_Query( $arg );
  
    while ( $get_arg->have_posts() ) {
      $get_arg->the_post();
    ?>
      
      <!-- Content -->
      <article class="row my-5 border-bottom-gold py-3">
        <div class="col-sm-8 col-lg-9 text-right">
          <h4><?php the_title() ?></h4>
          <div><?php the_excerpt(); ?></div>
          <a href="<?php the_permalink(); ?>" class="btn btn-gold">Más detalles</a>
        </div>
        <div class="col-sm-4 col-lg-3">
          <?php the_post_thumbnail('cuadrado', array('class'=> 'w-100 h-auto rounded-circle')); ?>
        </div>
      </article>
  
    <?php } wp_reset_postdata();
  ?>

<?php get_footer() ?>
