<?php if ( is_active_sidebar( 'Right Sidebar' ) ) : ?>
<ul id="sidebar-right<?php if ( is_active_sidebar( 'Left Sidebar' ) ) : ?>-small<?php endif; ?>">
<?php dynamic_sidebar( 'Right Sidebar' ); ?>
</ul>	
<?php endif; ?>