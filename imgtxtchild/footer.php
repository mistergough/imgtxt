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
<script>
jQuery(document).ready(function($) {
$(function() {
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop != 0)
            $('#over-header').stop().animate({'opacity':'0.5'},400);
        else   
            $('#over-header').stop().animate({'opacity':'1'},400);
    });
     
    $('#over-header').hover(
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('#over-header').stop().animate({'opacity':'1'},400);
            }
        },
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('#over-header').stop().animate({'opacity':'0.5'},400);
            }
        }
    );
});
});
</script>
</body>
</html>