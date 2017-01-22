<?php 
/*
Template Name: Index
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

function printTaxonomyKnown($tax, $term, $url) {
	
	$items = get_terms( $tax ); 
	if($items){
	foreach($items as $item): if($item->slug == $term){ ?>
		<a style="background-color: <?php if(get_option("taxonomy_$item->term_id")['cat_color']) echo get_option("taxonomy_$item->term_id")['cat_color']; else echo 'black'; ?>" 
		href="<?=get_home_url().'/'.$url.'/'.strtolower($item->name)?>"><span class="purp"><?=$item->name?></span></a>
	<?php }endforeach;}

}

// global $wp_query;
// if ( get_query_var('paged') ) {
//     $paged = get_query_var('paged');
// } else if ( get_query_var('page') ) {
//     $paged = get_query_var('page');
// } else {
//     $paged = 1;
// }
// $args = array( 'post_type' => 'post','paged' => $paged );
// $temp = $wp_query;
// $wp_query = new WP_Query( $args );
$tax_one = false; $tax_two = false; $job = false;
?>
<section class="company-page archive-page wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-9 col-md-8">
				
				<div class="archive-page-wrapper clearfix">

					<div class="row">
				<form>
				<?php if(is_category()): ?>
				<?php $tax_one = true; ?>
					<!-- Display category name
					Display category list
					<?php single_cat_title(); ?></li> -->
					<h2><?php single_cat_title('Category: ');?></h2>
				<?php elseif(is_tag()): ?>
				<?php $tax_two = true; ?>
					<!-- Display tag name
					Display tag list -->
					<h2><?php single_tag_title('Tag: '); ?></h2>
				<?php elseif(is_tax()): ?>
					<!--
						When it reaches this area it can only be a custom class.
						The custom post types have their own indexes, but the search/taxonomies lead here.
					 -->
					<?php $taxonomy = (get_queried_object()->taxonomy); 
						if (substr($taxonomy, 0, 3) == 'job') $job = true;?>
					<h2><?php single_term_title('Browsing: ');?></h2>
					<!-- Display tag name
					Display tag list
					<li><?php single_tag_title(); ?></li> -->
				<?php elseif(is_home()): ?>
					<!-- Post index, set from Reading -->
					<h2>Blog Archive</h2>
					<?php $tax_one = true; ?>
					<?php $tax_two = true; ?>
				<?php else: ?>
					It's one of the manual indexes.
					Check if url is /category/ or /tag/, retrieve all posts, display one of the above lists depending. If it's nor category nor tag, display all posts, and who knows
					<li>TEST</li>
				<?php endif ; ?>

				<?php if($tax_one): ?>
					<?php $items = get_categories(); if($items){ ?>
					<div class="categories meta <?php if($tax_one && $tax_two ) echo 'col-xs-6 col-md-6'?>">
					<?php printTaxonomy(0, 'category', 'category', false); ?>
	                </div>
	            <?php } endif; ?>

	            <?php if($tax_two): ?>
	            	<?php $items = get_terms( array( 'taxonomy' => 'post_tag' ) ); ?>
					<div class="tags meta <?php if($tax_one && $tax_two) echo 'col-xs-6 col-md-6" style="text-align: right'?>">
					<?php printTaxonomy(0, 'post_tag', 'tag', false); ?>
	                </div>
	            <?php endif; ?>

				<?php if(!$tax_one && !$tax_two): ?>
					<!-- IT SHOULD NOT REACH THIS AREA. THE JOBS HAVE THEIR OWN ARCHIVE. -->
	            	<?php
	            		$items = get_terms( array( 'taxonomy' => $taxonomy ) ); 
	            		$link =  '/jobs/'.substr($taxonomy, 4).'/';?>
					<div class="tags meta">
	                <?php foreach($items as $item): ?>
	                  <a style="background-color: <?php if(get_option("taxonomy_$item->term_id")['cat_color']) echo get_option("taxonomy_$item->term_id")['cat_color']; else echo 'black'; ?>" href="<?=get_home_url().$link.strtolower($item->name)?>"><span class="purp"><?=$item->name?></span></a>
	                <?php endforeach;?>
	                </div>
	            <?php endif; ?>

				</form>		

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
											<?php 
												if(is_category())
													printTaxonomyKnown(
														get_queried_object()->taxonomy, 
														get_queried_object()->slug, 
														'category');
												else 
													printTaxonomy($post->ID, 'category', 'category', true);
											
												if(is_tag())
													printTaxonomyKnown(
														get_queried_object()->taxonomy,
														get_queried_object()->slug, 
														'tag');
												else 
												  	printTaxonomy($post->ID, 'post_tag', 'tag', true)
											?>
										<?php elseif($post->post_type == 'jobs'): ?>

											<?php 
												if(is_tax('job_categories'))
													printTaxonomyKnown(
														get_queried_object()->taxonomy, 
														get_queried_object()->slug, 
														'jobs/categories');
												else 
													printTaxonomy($post->ID, 'job_categories', 'jobs/categories', true);
											
												if(is_tax('job_skills'))
													printTaxonomyKnown(
														get_queried_object()->taxonomy,
														get_queried_object()->slug, 
														'jobs/skills');
												else 
												  	printTaxonomy($post->ID, 'job_skills', 'jobs/skills', true)
											?>

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
				<?php if(!$job)get_sidebar();else{get_template_part('sidebar-jobs');} ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

<?php// if (  have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php //get_template_part( 'entry' ); ?>
<?php //comments_template(); ?>
<?php //endwhile; endif; ?>
<?php //get_template_part( 'nav', 'below' ); ?>
<!-- </section> -->
<?php //get_sidebar(); get_footer(); ?>