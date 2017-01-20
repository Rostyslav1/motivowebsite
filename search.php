<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<?php 
// $args = array( 
// 	'post_type'   => 'post',
// 	'tax_query' => array(array(
//         'taxonomy' => 'post',
//         'field' => 'name',
//         'terms' => get_search_query()
//     ))
// ); 

// $posts = new WP_Query($args);
?>
<section class="company-page archive-page wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="archive-page-wrapper clearfix">
					<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'motivo' ), get_search_query() ); ?></h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'entry' ); ?>
						<div class="archive-item clearfix">
							<div class="img-wrapper">
								<a href="<?=$post->guid?>"><?php
				                $image = get_the_post_thumbnail($post->ID);
				                if($image == '')
				                  $image = '<img src="'.get_bloginfo('template_url').'/img/logo_dark.svg" alt="">';
				                echo preg_replace( '/(width|height)=\"\d*\"\s/', "", $image);
				                ?>
								</a>
							</div>
							<div class="cont-wrapper">
								<h3><a href="<?=$post->guid?>"><?php the_title(); ?></a></h3>
								<p><?=get_the_excerpt();?></p>
								<div class="footer-cont">
									<span class="meta">
										<?php if(is_category()){$category = get_queried_object();}
											elseif(get_the_category($post->ID)[0]){
											$category = get_the_category($post->ID)[0];}
											else {$category = false;}?>
										<?php if($category): ?>
						                  <a style="background-color: <?php if(get_option("taxonomy_$category->term_id")['cat_color']) echo get_option("taxonomy_$category->term_id")['cat_color']; else echo 'black'; ?>" href="<?=get_home_url().'/category/'.strtolower($category->name)?>"><span class="purp"><?=$category->name?></span></a>
						              	<?php endif; ?>
										<?php wp_reset_query(); ?>

										<?php if(is_tag()){$tag = get_queried_object();}
											elseif(get_the_terms( $post->ID, 'post_tag' )[0]){
										 	$tag = get_the_terms( $post->ID, 'post_tag' )[0];}
										 	else {$tag = false;}?>
										<?php if($tag): ?>
						                  <a style="background-color: <?php if(get_option("taxonomy_$tag->term_id")['cat_color']) echo get_option("taxonomy_$tag->term_id")['cat_color']; else echo 'black'; ?>" href="<?=get_home_url().'/tag/'.strtolower($tag->name)?>"><span class="purp"><?=$tag->name?></span></a>
						                <?php endif; ?>
									</span>
									<span class="author_name"><?php if(get_avatar($post->post_author)) echo get_avatar($post->post_author); ?><a href=""><?php the_author(); ?></a></span>
									<span class="date"><a href=""><?php the_date('Y.m.d');?></a></span>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 padding-null">
				<?php get_sidebar(); ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>