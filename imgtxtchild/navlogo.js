jQuery( document ).ready(function() {
jQuery('h1').waypoint(function() {
    jQuery('.menu').toggleClass('visible');
});
});