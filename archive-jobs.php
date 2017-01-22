<?php 
/*
Template Name: Job Archive
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
$show_cats = false; $show_tags = false;


$show_cats = true; $show_tags = true;
?>
<section class="company-page archive-page wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-9 col-md-8">
				
				<div class="archive-page-wrapper clearfix">

<!-- 					<h2>Jobs</h2>
<form>
	<div class="categories meta <?php if($show_cats && $show_tags) echo 'col-xs-6 col-md-6'?>">
    <?php foreach(get_terms('job_categories') as $category): ?>
      <a style="background-color: <?php if(get_option("taxonomy_$category->term_id")['cat_color']) echo get_option("taxonomy_$category->term_id")['cat_color']; else echo 'black'; ?>" href="<?=get_home_url().'/jobs/categories/'.strtolower($category->name)?>"><span class="purp"><?=$category->name?></span></a>
    <?php endforeach;?>
    </div>
	<div class="tags meta <?php if($show_cats && $show_tags) echo 'col-xs-6 col-md-6" style="text-align: right'?>">
    <?php foreach(get_terms('job_skills') as $tag): ?>
      <a style="background-color: <?php if(get_option("taxonomy_$tag->term_id")['cat_color']) echo get_option("taxonomy_$tag->term_id")['cat_color']; else echo 'black'; ?>" href="<?=get_home_url().'/jobs/skills/'.strtolower($tag->name)?>"><span class="purp"><?=$tag->name?></span></a>
    <?php endforeach;?>
    </div>
</form>		 -->

					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'entry' ); ?>
					<div class="job-item">
						<div class="top-job">
							<h5 class="wow fadeIn">Back-end Developer	</h5>
							<span class="wow fadeIn" data-wow-delay="0.1s">@HubSpot - Tokyo</span>
						</div>
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
									<table>
										<tbody>
											<tr class="wow fadeInUp" data-wow-delay="0.1s">
												<td>Location</td>
												<td>Tokyo, Japan</td>
												<td>Salary</td>
												<td>4M - 6M yen</td>
											</tr>
										</tbody>
									</table>
									<table>
										<tbody>
											<tr class="wow fadeInUp" data-wow-delay="0.2s">
												<td>Location</td>
												<td>Tokyo, Japan</td>
												<td>Salary</td>
												<td>4M - 6M yen</td>
											</tr>
										</tbody>
									</table>
									<table>
										<tbody>
											<tr class="wow fadeInUp" data-wow-delay="0.3s">
												<td>Location</td>
												<td>Tokyo, Japan</td>
												<td>Salary</td>
												<td>4M - 6M yen</td>
											</tr>
										</tbody>
									</table>
									<!-- <span class="meta">
										<?php printTaxonomy($post->ID, 'job_categories', 'jobs/categories', true); ?>
									 	<?php printTaxonomy($post->ID, 'job_skills', 'jobs/skills', true); ?>
										<?php wp_reset_query(); ?>
									</span>
									<span class="author_name"><?php if(get_avatar($post->post_author)) echo get_avatar($post->post_author); ?><a href=""><?php the_author(); ?></a></span>
									<span class="date"><a href=""><?php the_date('Y.m.d');?></a></span> -->
								</div>
								<div class="footer-job wow fadeInUp" data-wow-delay="0.3s">
									<span class="meta">
												<a href="">Read More</a>
												<a href="">Apply Now</a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 padding-null">
				<?php get_template_part( 'sidebar-jobs' ); ?>
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