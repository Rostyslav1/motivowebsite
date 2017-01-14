<?php
/*
Template Name: Categories
*/
?>
<?php
global $wp_query;
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} else if ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
// $args = array( 'post_type' => 'video','paged' => $paged );
$args = array( 'post_type' => 'post','paged' => $paged );
$temp = $wp_query;
$wp_query = new WP_Query( $args );
?>
<?php get_header(); ?>
<section class="company-page archive-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="archive-page-wrapper clearfix">
					<!-- <header class="header"> -->
					<h1 class="entry-title"><?php _e( 'Category Archives: ', 'motivo' ); ?><?php single_cat_title(); ?></h1>
					<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
					DISPLAY CLICKABLE CATEGORIES HERE
					<!-- </header> -->
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
								<p><?php the_content();?></p>
								<div class="footer-cont">
									<span class="meta">
										<a href="">LifeStyle</a>
										<a href="">Tokyo</a>
									</span>
									<span class="name"><a href=""><?php the_author(); ?></a></span>
									<span class="date"><a href=""><?php the_date('Y.m.d');?></a></span>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 padding-null">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>