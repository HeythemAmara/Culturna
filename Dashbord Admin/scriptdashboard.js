//! Scroll back to top =================================================
  

$(document).ready(function() {	
    var offset = 200;
    var duration = 400;
    jQuery(window).on('scroll', function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.scroll-to-top').addClass('active-arrow');
        } else {
            jQuery('.scroll-to-top').removeClass('active-arrow');
        }
    });				
    jQuery('.scroll-to-top').on('click', function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
}); 

//! Burger Menu or SideBar =============================================

$('.burger, .overlay').click(function(){
    $('.burger').toggleClass('clicked');
    $('.overlay').toggleClass('show');
    $('nav').toggleClass('show');
    $('body').toggleClass('overflow');
  });