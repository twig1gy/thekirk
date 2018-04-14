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
  <?php 
//   $parent_id = wp_get_post_parent_id(2);
//   print_r('parent id: ' . $parent_id);
//   $args = array(
// 	'sort_order' => 'asc',
// 	'sort_column' => 'post_title',
// 	'hierarchical' => 0,
// 	'exclude' => '',
// 	'include' => '',
// 	'meta_key' => '',
// 	'meta_value' => '',
// 	'authors' => '',
// 	'child_of' => 0,
// 	'parent' => $parent_id,
// 	'exclude_tree' => '',
// 	'number' => '',
// 	'offset' => 0,
// 	'post_type' => 'page',
// 	'post_status' => 'publish'
// ); 
// $pagess = get_pages($args); 
// if(count($pagess) > 0){
//   echo "<div class='row column'>";
//   foreach($pagess as $pagee) {
//     echo "<a href='".$pagee->url."'>".$pagee->title."</a> ";
//   }
//   echo "</div>";
// }
?>
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