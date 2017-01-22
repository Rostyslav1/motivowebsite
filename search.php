<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<?php 
function printTaxonomy($post_id, $term, $url, $one) {
	if($post_id > 0){
		if(!$one){
			$items = wp_get_post_terms( $post_id, $term );
			if($items){
			foreach($items as $item): ?>
				<a style="background-color: <?php if(get_option("taxonomy_$item->term_id")['cat_color']) echo get_option("taxonomy_$item->term_id")['cat_color']; else echo 'black'; ?>" 
				href="<?=get_home_url().'/'.$url.'/'.strtolower($item->name)?>"><span class="purp"><?=$item->name?></span></a>
			<?php endforeach;}
		} else {
			$item = wp_get_post_terms( $post_id, $term )[0];
			if($item){?>
			<a style="background-color: <?php if(get_option("taxonomy_$item->term_id")['cat_color']) echo get_option("taxonomy_$item->term_id")['cat_color']; else echo 'black'; ?>" 
				href="<?=get_home_url().'/'.$url.'/'.strtolower($item->name)?>"><span class="purp"><?=$item->name?></span></a>
			<?php }
		}
	} else {
    	$items = get_terms( array( 'taxonomy' => $term ) ); 
    	if($items){
		foreach($items as $item): ?>
			<a style="background-color: <?php if(get_option("taxonomy_$item->term_id")['cat_color']) echo get_option("taxonomy_$item->term_id")['cat_color']; else echo 'black'; ?>" 
			href="<?=get_home_url().'/'.$url.'/'.strtolower($item->name)?>"><span class="purp"><?=$item->name?></span></a>
		<?php endforeach;}
	}
}
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
					<div class="row">
						<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'motivo' ), get_search_query() ); ?></h1>
						<?php if(get_query_var('post_type') == 'any'): ?>
<div class="row">
<div class="categories meta col-xs-6 col-md-6"><?php printTaxonomy(0, 'category', 'category', false); ?></div>
<div class="categories meta col-xs-6 col-md-6" style="text-align: right"><?php printTaxonomy(0, 'post_tag', 'tag', false); ?></div>
</div> <div class="row p-t-1">
<div class="categories meta col-xs-6 col-md-6"><?php printTaxonomy(0, 'job_categories', 'jobs/categories', false); ?></div>
<div class="categories meta col-xs-6 col-md-6" style="text-align: right"><?php printTaxonomy(0, 'job_skills', 'jobs/skills', false); ?></div>
</div>
						<?php else: ?>
						<div class="categories meta col-xs-6 col-md-6">
							<?php if($post->post_type == 'post'): ?>
								<?php printTaxonomy(0, 'category', 'category', false); ?>
				            <?php elseif($post->post_type == 'jobs'): ?>
								<?php printTaxonomy(0, 'job_categories', 'jobs/categories', false); ?>
				            <?php endif; ?>
						</div>
						<div class="categories meta col-xs-6 col-md-6" style="text-align: right">
							<?php if($post->post_type == 'post'): ?>
								<?php printTaxonomy(0, 'post_tag', 'tag', false); ?>
				            <?php elseif($post->post_type == 'jobs'): ?>
								<?php printTaxonomy(0, 'job_skills', 'jobs/skills', false); ?>
				            <?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
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
										<?php if($post->post_type == 'post'): ?>
											<?php printTaxonomy($post->ID, 'category', 'category', true); ?>
											<?php printTaxonomy($post->ID, 'post_tag', 'tag', true); ?>
						                <?php elseif($post->post_type == 'jobs'): ?>
											<?php printTaxonomy($post->ID, 'job_categories', 'jobs/categories', true); ?>
											<?php printTaxonomy($post->ID, 'job_skills', 'jobs/skills', true); ?>
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
				<?php if(get_query_var('post_type') != 'jobs'): ?>
				<?php get_sidebar(); ?>
				<?php else: ?>
				<?php get_template_part( 'sidebar-jobs' ); ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>