<?php if(is_page( 47 ))
{
    get_header('story');
}
else
{
    get_header();
}
?>

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
<ul id="post-list">
<?php
if (have_posts()) :
while (have_posts()) :
the_post(); ?>
<li class="individual-post"><div class="individual-post-content">
<a class="image-link" href="<?php the_permalink(); ?>"><?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail('medium');
	}
	?></a>
<h2><a class="title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<p class="post-meta">Published on <?php the_time('jS F Y') ?> by <?php the_author(); ?> in <?php the_category(', ') ?>.</p>
</div><br class="clear"></li>
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