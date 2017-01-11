<?php get_header(); ?>
<div class="inner">
  <div id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div style="width: 100%">
        <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
      </div>
      <section class="entry-content">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        <?php the_content(); ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
      </section>
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
  </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>