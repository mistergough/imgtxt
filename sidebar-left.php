<?php if ( is_active_sidebar( 'Left Sidebar' ) ) : ?>
<ul id="sidebar-left<?php if ( is_active_sidebar( 'Right Sidebar' ) ) : ?>-small<?php endif; ?>">
<?php dynamic_sidebar( 'Left Sidebar' ); ?>
</ul>	
<?php endif; ?>