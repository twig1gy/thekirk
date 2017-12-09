<?php get_header(); ?>
<section class="page">
<div class="section subhead" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -150px;">
    <div class="container">
      <div class="row">
        <div class="full-width columns left">
          <h1><?php the_title() ?></h1>
        </div>
      </div>
    </div>
</div>
<div class="section">
  <div class="container">
    <div class="row column">
    <?php the_content() ?>
      <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
				endwhile; endif; 
			?>

    </div>
  </div>
</div>
</section>
<?php get_footer( ); ?>