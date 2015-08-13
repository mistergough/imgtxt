<div id="footer">
<div class="inner">
<?php if ( is_active_sidebar( 'Footer' ) ) : ?>
<ul id="footer-sidebar">
<?php dynamic_sidebar( 'Footer' ); ?>
</ul>
<?php endif; ?>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>