<?php
/*
Template Name: Loopless Page
*/?>

<?php get_header();?>

<?php if ( is_active_sidebar( 'over-content' ) ) : ?>
<div id="over-content">
<div class="inner">
<ul id="over-content-widgets">
<?php dynamic_sidebar( 'over-content' ); ?>
</ul>
<br class="clear">
</div>
</div>
<?php endif; ?>

<div id="content">
<div class="inner">
<?php get_sidebar( 'left' )?>	
<div id="main" class="<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>left-<?php endif; ?>middle<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>-right<?php endif; ?>">
<?php if ( is_active_sidebar( 'Top Content' ) ) : ?>
<ul id="top-widgets">
<?php dynamic_sidebar( 'Top Content' ); ?>
</ul>
<?php endif; ?>
<?php if ( is_active_sidebar( 'loopless-content' ) ) : ?>
<ul id="center-widgets">
<?php dynamic_sidebar( 'loopless-content' ); ?>
</ul>
<?php endif; ?>
<?php if ( is_active_sidebar( 'bottom-content' ) ) : ?>
<ul id="bottom-widgets">
<?php dynamic_sidebar( 'bottom-content' ); ?>
</ul>
<?php endif; ?>
</div>
<?php get_sidebar( 'right' )?>
<br class="clear">
</div>
</div>

<?php if ( is_active_sidebar( 'under-content' ) ) : ?>
<div id="under-content">
<div class="inner">
<ul id="under-content-widgets">
<?php dynamic_sidebar( 'under-content' ); ?>
</ul>
<br class="clear">
</div>
</div>
<?php endif; ?>

<?php get_footer();?>