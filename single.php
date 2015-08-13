<?php get_header();?>
<?php if ( is_active_sidebar( 'Over Content' ) ) : ?>
<div id="over-content">
<div class="inner">
<ul id="over-content-widgets">
<?php dynamic_sidebar( 'Over Content' ); ?>
</ul>
<br class="clear">
</div>
</div>
<?php endif; ?>
<div id="content">
<div class="inner">
<?php get_sidebar( 'left' )?>	
<div id="main" class="<?php if ( is_active_sidebar( 'Left Sidebar' ) ) : ?>left-<?php endif; ?>middle<?php if ( is_active_sidebar( 'Right Sidebar' ) ) : ?>-right<?php endif; ?>">
<?php if ( is_active_sidebar( 'Top Content' ) ) : ?>
<ul id="top-widgets">
<?php dynamic_sidebar( 'Top Content' ); ?>
</ul>
<?php endif; ?>
<div id="posts">
<?php
if (have_posts()) :
while (have_posts()) :
the_post(); ?>
<div class="individual-post">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<p class="post-meta">Published on <?php the_time('jS F Y') ?> by <?php the_author(); ?> in <?php the_category(', ') ?>.</p>
<p><?php comment_form(); ?></p>
</div>
<?php
endwhile;
endif;
?>
</ul>
</div>
<?php if ( is_active_sidebar( 'Bottom Content' ) ) : ?>
<ul id="bottom-widgets">
<?php dynamic_sidebar( 'Bottom Content' ); ?>
</ul>
<?php endif; ?>
</div>
<?php get_sidebar( 'right' )?>
<br class="clear">
</div>
</div>

<?php if ( is_active_sidebar( 'Under Content' ) ) : ?>
<div id="under-content">
<div class="inner">
<ul id="under-content-widgets">
<?php dynamic_sidebar( 'Under Content' ); ?>
</ul>
<br class="clear">
</div>
</div>
<?php endif; ?>

<?php get_footer();?>